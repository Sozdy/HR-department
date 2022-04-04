<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ArchiveAction extends AbstractAction
{
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'vacancies';
    }

    public function getTitle()
    {
        return $this->data->{'status'} == "PUBLISHED" ? 'Архивировать' : 'Вернуть';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-'.($this->data->{'status'} == "PUBLISHED" ? 'danger' : 'success').' pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('vacancies.archive', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}
