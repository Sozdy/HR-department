<form id="site-form" class="form_block" enctype="multipart/form-data" method="post" action="{{ $action ?? "" }}">
    {{ csrf_field() }}
    <p class="form_title">{{ $title ?? "Анкета n/a" }}</p>

    @foreach($fields as $field)

        @if ($field->type == "title")

            <p class="form_subtitle" data-name="{{ $field->name ?? "" }}">{{ $field->label }}</p>

        @elseif($field->type == "more")

            <a class="btn gray" onclick="more(this)" data-target="{{ $field->target }}" style="font-size: 0.8em; padding: 1em; margin-top: 0">{{ "Добавить еще " . ($field->text ?? "") }}</a>

        @else

            <div class="form-group" data-name="{{ $field->name }}">

                @if(!($field->removeTopLabel ?? false))
                    <label class="control-label" for="{{ $field->name ?? "" }}">{{ $field->label ?? "" }}:</label>
                @endif

                @if ($field->type == "textarea")

                    <textarea class="form-control"
                              id="{{ $field->name }}"
                              name="{{ $field->name }}">{{ old( $field->name ) }}</textarea>

                @elseif($field->type == "date")
                    <?php $id = "date_" . rand(0, 999999) ?>

                    <input  id="{{ $id }}"
                            name="{{ $field->name }}"
                            value="{{ old($field->name) }}"
                            data-type="date" >

                    <script>
                        flatpickr('#{{ $id }}', {
                            dateFormat: 'd.m.Y',
                            altFormat: "F j, Y",
                            ariaDateFormat: "F j, Y",
                            disableMobile: false,
                        });
                    </script>

                @elseif($field->type == "checkbox")

                    <br/>
                    <label>
                        <input type="checkbox"
                               id="{{ $field->name }}"
                               name="{{ $field->name }}"
                               value="{{ old( $field->name ) }}">
                        {{ $field->label }}
                    </label>

                @elseif($field->type == "radio")

                    @foreach($field->options as $option)

                        <br/>
                        <label>
                            <input type="radio"
                                   name="{{ $field->name }}"
                                   value="{{ $option }}">
                            {{ $option }}
                        </label>

                    @endforeach

                @elseif($field->type == "hidden")

                    <input type="hidden" name="{{$field->name}}" value={{$field->value}}>

                @else

                    <input type="{{ $field->type }}"
                           class="form-control"
                           id="{{ $field->name }}"
                           name="{{ $field->name }}"
                           value="{{ old($field->name) }}"
                           multiple
                    >

                @endif

                <span class="text-danger">{{ $errors->first($field->name) }}</span>
            </div>

        @endif

    @endforeach

    <br>

    <input type="submit" name="send" value="Отправить" class="send_btn" disabled />

</form>

@push("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.4-beta.33/jquery.inputmask.min.js" integrity="sha256-L4kpZP1BsqygY+/b55A6N3o7zGWuRQcJGZaVomcwKD4=" crossorigin="anonymous"></script>
    <script>
        function more (self) {
            let target = $(self).attr("data-target");

            $("<hr>").insertBefore($(self));

            let newFieldsBlock = $("[data-name^='"+target+"']").clone();

            let randomId = Math.floor(Math.random() * 100000) + 1;
            let fields = $(newFieldsBlock).find("[name]");
            fields.each((key, val) => {
                $(val).attr("name", $(val).attr("name") + "|" + randomId);
            });

            $(newFieldsBlock).find("input[type='text']").val("");
            $(newFieldsBlock).find(":checked").prop("checked", false);

            $(newFieldsBlock).insertBefore($(self));
            $(newFieldsBlock).attr("data-name", "");

            fields.each((key, val) => {
                if ($(val).attr("data-type") == "date") {
                    let rand = Math.floor(Math.random() * 100000) + 1;

                    $(val).attr("id", "date_" + rand);

                    flatpickr('#date_' + rand, {
                        dateFormat: 'd.m.Y',
                        altFormat: "F j, Y",
                        ariaDateFormat: "F j, Y",
                        disableMobile: false,
                    });
                }
            });
        }

        $("input[name='privacy_policy_accepted']").change(function() {
            $("input[type='submit']").prop('disabled', !$(this).is(':checked'));
        });

        $("[name='snils']").inputmask("999-999-99999");

        @if (isset($courthouses))
            let courthouses = '<select class="form-control" id="practice_justice" name="practice_justice">' +
                @foreach($courthouses as $courthouse)
                    "<option value='{{ preg_replace( "/\r|\n/", " ", $courthouse->name) }}'>{{ preg_replace( "/\r|\n/", " ", $courthouse->name) }}</option>" +
                @endforeach
                "</select>";

            $("[name='practice_justice']").replaceWith(courthouses);
        @endif
    </script>
@endpush
