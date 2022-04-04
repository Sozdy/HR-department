<!--<template>-->
<!--    <div>-->
<!--        <div class="vue-navbar">-->
<!--            <div class="container d-flex">-->

<!--                <div class="logo-box">-->
<!--                    <a href="#">-->
<!--                        <img src="https://via.placeholder.com/258x100/F5F5F5/?text=logo" alt="" class="logo">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="row nav-list">-->
<!--                    <a style="vertical-align: center" href="#work">-->
<!--                        <div class="col- nav-item">Вакансии</div>-->
<!--                    </a>-->
<!--                    <a style="vertical-align: center" href="#about">-->
<!--                        <div class="col- nav-item">Конкурсы</div>-->
<!--                    </a>-->
<!--                    <a style="vertical-align: center" href="#careers">-->
<!--                        <div class="col- nav-item">Практика и стажировки</div>-->
<!--                    </a>-->
<!--                    <a style="vertical-align: center" href="#contact">-->
<!--                        <div class="col- nav-item">Обучение</div>-->
<!--                    </a>-->
<!--                    <a style="vertical-align: center" href="#contact">-->
<!--                        <div class="col- nav-item">Молодежный кадровый резерв</div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <svg class="nav-search"-->
<!--                     width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <g clip-path="url(#clip0)">-->
<!--                        <path-->
<!--                            d="M7.04606 0C3.16097 0 0 3.16097 0 7.04606C0 10.9314 3.16097 14.0921 7.04606 14.0921C10.9314 14.0921 14.0921 10.9314 14.0921 7.04606C14.0921 3.16097 10.9314 0 7.04606 0ZM7.04606 12.7913C3.87816 12.7913 1.30081 10.214 1.30081 7.04609C1.30081 3.87819 3.87816 1.30081 7.04606 1.30081C10.214 1.30081 12.7913 3.87816 12.7913 7.04606C12.7913 10.214 10.214 12.7913 7.04606 12.7913Z"-->
<!--                            fill="#ffffff"/>-->
<!--                        <path-->
<!--                            d="M16.476 15.5558L12.747 11.8268C12.4929 11.5727 12.0814 11.5727 11.8273 11.8268C11.5732 12.0807 11.5732 12.4926 11.8273 12.7465L15.5563 16.4755C15.6833 16.6025 15.8496 16.6661 16.0161 16.6661C16.1824 16.6661 16.3489 16.6025 16.476 16.4755C16.7301 16.2216 16.7301 15.8097 16.476 15.5558Z"-->
<!--                            fill="#ffffff"/>-->
<!--                    </g>-->
<!--                    <defs>-->
<!--                        <clipPath id="clip0">-->
<!--                            <rect width="16" height="16" fill="white"/>-->
<!--                        </clipPath>-->
<!--                    </defs>-->
<!--                </svg>-->

<!--                <div class="burger-menu">-->
<!--                    <div class="menu-icon-wrapper" @click="menuIconSwitch">-->
<!--                        <div class="menu-icon"></div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--        <div class="nav-list-drop">-->
<!--            <div class="nav-list-drop-box">-->
<!--                <a href="#work">-->
<!--                    <div class="nav-item-drop">Вакансии</div>-->
<!--                </a>-->
<!--                <a href="#about">-->
<!--                    <div class="nav-item-drop">Конкурсы</div>-->
<!--                </a>-->
<!--                <a href="#careers">-->
<!--                    <div class="nav-item-drop">Практика и стажировки</div>-->
<!--                </a>-->
<!--                <a href="#contact">-->
<!--                    <div class="nav-item-drop">Обучение</div>-->
<!--                </a>-->
<!--                <a href="#contact">-->
<!--                    <div class="nav-item-drop">Молодежный кадровый резерв</div>-->
<!--                </a>-->
<!--                <div class="nav-search-drop">-->
<!--                    <input type="text" placeholder="" name="search">-->
<!--                    <button type="submit">-->
<!--                        <svg-->
<!--                            width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <g clip-path="url(#clip0)">-->
<!--                                <path-->
<!--                                    d="M7.04606 0C3.16097 0 0 3.16097 0 7.04606C0 10.9314 3.16097 14.0921 7.04606 14.0921C10.9314 14.0921 14.0921 10.9314 14.0921 7.04606C14.0921 3.16097 10.9314 0 7.04606 0ZM7.04606 12.7913C3.87816 12.7913 1.30081 10.214 1.30081 7.04609C1.30081 3.87819 3.87816 1.30081 7.04606 1.30081C10.214 1.30081 12.7913 3.87816 12.7913 7.04606C12.7913 10.214 10.214 12.7913 7.04606 12.7913Z"-->
<!--                                    fill="#ffffff"/>-->
<!--                                <path-->
<!--                                    d="M16.476 15.5558L12.747 11.8268C12.4929 11.5727 12.0814 11.5727 11.8273 11.8268C11.5732 12.0807 11.5732 12.4926 11.8273 12.7465L15.5563 16.4755C15.6833 16.6025 15.8496 16.6661 16.0161 16.6661C16.1824 16.6661 16.3489 16.6025 16.476 16.4755C16.7301 16.2216 16.7301 15.8097 16.476 15.5558Z"-->
<!--                                    fill="#ffffff"/>-->
<!--                            </g>-->
<!--                            <defs>-->
<!--                                <clipPath id="clip0">-->
<!--                                    <rect width="16" height="16" fill="white"/>-->
<!--                                </clipPath>-->
<!--                            </defs>-->
<!--                        </svg>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->


<!--<script>-->
<!--    export default {-->
<!--        name: "Navbar",-->
<!--        data() {-->
<!--            return {-->
<!--                sizeX: 0-->
<!--            }-->
<!--        },-->
<!--        mounted() {-->
<!--            window.addEventListener('resize', () => {-->
<!--                this.sizeX = document.documentElement.clientWidth;-->
<!--            });-->
<!--        },-->

<!--        methods: {-->
<!--            menuIconSwitch() {-->
<!--                document.querySelector('.menu-icon').classList.toggle('menu-icon-active');-->
<!--                document.querySelector('.nav-list-drop').classList.toggle('visibility');-->
<!--            }-->
<!--        },-->
<!--    }-->

<!--</script>-->


<!--<style scoped lang="scss">-->
<!--    @import "resources/sass/colors.scss";-->

<!--    .nav-list-drop {-->
<!--        position: fixed;-->
<!--        background-color: $light-beige;-->
<!--        z-index: 1;-->
<!--        width: 100vw;-->
<!--        height: 100vh;-->
<!--        max-width: 100%;-->
<!--        top: -100vh;-->
<!--        left: 0;-->
<!--        transition: top .2s ease-out;-->


<!--        .nav-list-drop-box {-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            justify-content: center;-->
<!--            align-items: center;-->
<!--            height: 100%;-->

<!--            .nav-item-drop {-->
<!--                font-size: 1.5rem;-->
<!--                margin-bottom: 30px;-->
<!--                font-style: normal;-->
<!--                font-weight: 500;-->
<!--                line-height: 28px;-->
<!--                text-align: center;-->
<!--                color: #333333;-->
<!--            }-->

<!--            .nav-search-drop {-->
<!--                input {-->
<!--                    max-width: 700px;-->
<!--                    width: 70vw;-->
<!--                    height: 40px;-->
<!--                    margin-top: 7vh;-->
<!--                    background: #FFFFFF;-->
<!--                    border: 1px solid rgba(0, 0, 0, 0.2);-->
<!--                    box-sizing: border-box;-->
<!--                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);-->
<!--                }-->

<!--                button {-->
<!--                    right: 4px;-->
<!--                    position: relative;-->
<!--                    border-width: 0;-->
<!--                    background-color: #70D4B4;-->
<!--                    width: 40px;-->
<!--                    height: 40px;-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    }-->

<!--    .visibility {-->
<!--        top: 0;-->
<!--    }-->

<!--    .vue-navbar {-->
<!--        background-color: $blue;-->
<!--        position: fixed;-->
<!--        width: 100vw;-->
<!--        max-width: 100%;-->
<!--        top: 0;-->
<!--        left: 0;-->
<!--        z-index: 2;-->

<!--        .container {-->

<!--            .logo-box {-->
<!--                display: inline-block;-->
<!--                position: relative;-->
<!--                z-index: 2;-->
<!--            }-->

<!--            .nav-list {-->
<!--                display: none;-->
<!--            }-->

<!--            .nav-search {-->
<!--                display: none;-->
<!--            }-->

<!--            .burger-menu {-->
<!--                position: absolute;-->
<!--                top: 16px;-->
<!--                right: 18px;-->
<!--                z-index: 2;-->


<!--                .menu-icon-wrapper {-->
<!--                    width: 30px;-->
<!--                    height: 30px;-->
<!--                    display: flex;-->
<!--                    justify-content: flex-end;-->
<!--                }-->

<!--                .menu-icon {-->
<!--                    position: relative;-->
<!--                    top: 10px;-->
<!--                    width: 30px;-->
<!--                    height: 3px;-->
<!--                    background-color: #fff;-->
<!--                }-->

<!--                .menu-icon::before {-->
<!--                    position: absolute;-->
<!--                    left: 0;-->
<!--                    top: -10px;-->
<!--                    content: '';-->
<!--                    width: 30px;-->
<!--                    height: 3px;-->
<!--                    background-color: #fff;-->
<!--                    transition: transform 0.2s ease-in, top 0.2s linear 0.2s;-->

<!--                }-->

<!--                .menu-icon::after {-->
<!--                    position: absolute;-->
<!--                    left: 0;-->
<!--                    top: 10px;-->
<!--                    content: '';-->
<!--                    width: 30px;-->
<!--                    height: 3px;-->
<!--                    background-color: #fff;-->
<!--                    transition: transform 0.2s ease-in, top 0.2s linear 0.2s;-->

<!--                }-->

<!--                .menu-icon.menu-icon-active {-->
<!--                    background-color: transparent;-->
<!--                }-->

<!--                .menu-icon.menu-icon-active::before {-->
<!--                    transform: rotate(45deg);-->
<!--                    top: 0;-->
<!--                    transition: top 0.2s linear, transform 0.2s ease-in 0.2s;-->
<!--                }-->

<!--                .menu-icon.menu-icon-active::after {-->
<!--                    transform: rotate(-45deg);-->
<!--                    top: 0;-->
<!--                    transition: top 0.2s linear, transform 0.2s ease-in 0.2s;-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    }-->


<!--    .logo {-->
<!--        object-fit: cover;-->
<!--        height: 58px;-->
<!--    }-->

<!--    @media (min-width: 768px) {-->
<!--        .logo {-->
<!--            object-fit: cover;-->
<!--            height: 100px;-->
<!--            margin-right: 15px;-->
<!--        }-->

<!--        .vue-navbar {-->
<!--            .container {-->
<!--                .burger-menu {-->
<!--                    top: 38.5px;-->
<!--                    right: 43px;-->
<!--                }-->
<!--            }-->

<!--        }-->
<!--    }-->

<!--    @media (min-width: 1280px) {-->
<!--        .burger-menu {-->
<!--            display: none;-->
<!--        }-->

<!--        .nav-list-drop {-->
<!--            display: none;-->
<!--        }-->

<!--        .vue-navbar {-->
<!--            .container {-->
<!--                .nav-search {-->
<!--                    display: block;-->
<!--                    margin: auto 0 auto auto;-->
<!--                }-->

<!--                .nav-list {-->
<!--                    display: flex;-->

<!--                    a {-->
<!--                        text-decoration: none;-->

<!--                        &:hover{-->
<!--                            background-color: #226585;-->
<!--                        }-->

<!--                        .nav-item {-->
<!--                            padding: 38px 15px;-->
<!--                            margin: auto;-->
<!--                            font-size: 1rem;-->
<!--                            color: #fff;-->
<!--                        }-->
<!--                    }-->
<!--                }-->
<!--            }-->
<!--        }-->

<!--    }-->
<!--</style>-->
