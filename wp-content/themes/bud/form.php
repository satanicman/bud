<?php get_header(); ?>
<?php
/*
Template Name: form
*/
?>
<section class="form">
    <div class="container">
        <div class="row">
            <h1 class="main_title">Запросить быстрый расчет:</h1>
            <form action="#" class="form-form" id="formForm">
                <p class="form_subtitle">Данные для заказа:</p>
                <div class="form-fields order">
                    <div class="form-group">
                        <label for="aim" class="label">Назначение</label>
                        <input type="text" name="aim" id="aim" class="form-control"
                               placeholder="например ангар для сельхоз техники">
                    </div>
                    <div class="form-group">
                        <label for="city" class="label">Город строительства</label>
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                    <div class="form-group required">
                        <label for="name" class="label">Ваше имя</label>
                        <input type="text" name="name" id="name" required="required" class="form-control required"
                               data-validate="isName">
                    </div>
                    <div class="form-group required">
                        <label for="phone" class="label">Телефон</label>
                        <input type="tel" name="phone" id="phone" required="required" class="form-control required"
                               data-validate="isPhoneNumber">
                    </div>
                    <div class="form-group required">
                        <label for="email" class="label">E-mail</label>
                        <input type="email" name="email" id="email" required="required" class="form-control required"
                               data-validate="isEmail">
                    </div>
                    <hr>
                    <div class="alert"></div>
                    <button class="btn-default btn" id="sendForm">Отправить</button>
                </div>
                <p class="form_subtitle">Примерный размер здания:</p>
                <div class="form-fields size">
                    <div class="form-group">
                        <label for="length" class="label">Длина(м)</label><input type="text" name="length" id="length"
                                                                                 class="form-control required"
                                                                                 data-validate="isInt" required
                                                                                 pattern="^[0-9]*$">
                    </div>
                    <div class="form-group">
                        <label for="width" class="label">Ширина(м)</label><input type="text" name="width" id="width"
                                                                                 class="form-control required"
                                                                                 data-validate="isInt" required
                                                                                 pattern="^[0-9]*$">
                    </div>
                    <div class="form-group">
                        <label for="height" class="label">Высота(м)</label><input type="text" name="height" id="height"
                                                                                  class="form-control required"
                                                                                  data-validate="isInt" required
                                                                                  pattern="^[0-9]*$">
                    </div>
                    <div class="form-group square-wrap">
                        <label class="label">Площадь</label>
                        <div class="group">
                            <div class="square">0</div>
                            <label class="label">m<sup>2</sup></label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tol" class="label">Стеновые панели толщина, мм</label>
                        <select name="tol" id="tol" class="form-control">
                            <option value="80" selected="selected">80</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tolPan" class="label">Кровельные панели толщина, мм</label>
                        <select name="tolPan" id="tolPan" class="form-control">
                            <option value="100" selected="selected">100</option>
                            <option value="200">200</option>
                            <option value="250">250</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-tabs">
                    <ul class="nav nav-tabs top">
                        <li><a data-toggle="tab" href="#dvu" class="dvu"><i
                                        class="icon dvu-icon"></i><span>Двускатная</span></a></li>
                        <li><a data-toggle="tab" href="#odn" class="odn"><i
                                        class="icon odn-icon"></i><span>Односкатная</span></a></li>
                        <li><a data-toggle="tab" href="#pl" class="pl"><i class="icon pl-icon"></i><span>Плоская</span></a>
                        </li>
                    </ul>
                    <p class="form_subtitle clearfix">Подберите цвет</p>
                    <div class="tab-content top">
                        <div id="dvu" class="tab-pane clearfix">
                            <ul class="nav nav-tabs col-lg-3 col-md-3 col-sm-12">
                                <li class="active"><a data-toggle="tab" href="#dvu-dach">Крыша</a></li>
                                <li><a data-toggle="tab" href="#dvu-wall">Стены</a></li>
                                <li><a data-toggle="tab" href="#dvu-brett">Планки обрамления</a></li>
                            </ul>
                            <div class="tab-content col-lg-9 col-md-9 col-sm-12">
                                <div id="dvu-dach" class="tab-pane active dach">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL1003"
                                                   id="dvu-dach-color1" class="colors-input">
                                            <label for="dvu-dach-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL1014"
                                                   id="dvu-dach-color2" class="colors-input">
                                            <label for="dvu-dach-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL1015"
                                                   id="dvu-dach-color3" class="colors-input">
                                            <label for="dvu-dach-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL3005"
                                                   id="dvu-dach-color4" class="colors-input">
                                            <label for="dvu-dach-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL3009"
                                                   id="dvu-dach-color5" class="colors-input">
                                            <label for="dvu-dach-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL3011"
                                                   id="dvu-dach-color6" class="colors-input">
                                            <label for="dvu-dach-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL5002"
                                                   id="dvu-dach-color7" class="colors-input">
                                            <label for="dvu-dach-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL5005"
                                                   id="dvu-dach-color8" class="colors-input">
                                            <label for="dvu-dach-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL6002"
                                                   id="dvu-dach-color9" class="colors-input">
                                            <label for="dvu-dach-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL6005"
                                                   id="dvu-dach-color10" class="colors-input">
                                            <label for="dvu-dach-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL7004"
                                                   id="dvu-dach-color11" class="colors-input">
                                            <label for="dvu-dach-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL7035"
                                                   id="dvu-dach-color12" class="colors-input">
                                            <label for="dvu-dach-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL8004"
                                                   id="dvu-dach-color13" class="colors-input">
                                            <label for="dvu-dach-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL8017"
                                                   id="dvu-dach-color14" class="colors-input">
                                            <label for="dvu-dach-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL8019"
                                                   id="dvu-dach-color15" class="colors-input">
                                            <label for="dvu-dach-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL9003"
                                                   id="dvu-dach-color16" class="colors-input">
                                            <label for="dvu-dach-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL9006"
                                                   id="dvu-dach-color17" class="colors-input">
                                            <label for="dvu-dach-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL9010"
                                                   id="dvu-dach-color18" class="colors-input">
                                            <label for="dvu-dach-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][dach]" value="RAL9011"
                                                   id="dvu-dach-color19" class="colors-input">
                                            <label for="dvu-dach-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="dvu-wall" class="tab-pane wall">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL1003"
                                                   id="dvu-wall-color1" class="colors-input">
                                            <label for="dvu-wall-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL1014"
                                                   id="dvu-wall-color2" class="colors-input">
                                            <label for="dvu-wall-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL1015"
                                                   id="dvu-wall-color3" class="colors-input">
                                            <label for="dvu-wall-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL3005"
                                                   id="dvu-wall-color4" class="colors-input">
                                            <label for="dvu-wall-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL3009"
                                                   id="dvu-wall-color5" class="colors-input">
                                            <label for="dvu-wall-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL3011"
                                                   id="dvu-wall-color6" class="colors-input">
                                            <label for="dvu-wall-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL5002"
                                                   id="dvu-wall-color7" class="colors-input">
                                            <label for="dvu-wall-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL5005"
                                                   id="dvu-wall-color8" class="colors-input">
                                            <label for="dvu-wall-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL6002"
                                                   id="dvu-wall-color9" class="colors-input">
                                            <label for="dvu-wall-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL6005"
                                                   id="dvu-wall-color10" class="colors-input">
                                            <label for="dvu-wall-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL7004"
                                                   id="dvu-wall-color11" class="colors-input">
                                            <label for="dvu-wall-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL7035"
                                                   id="dvu-wall-color12" class="colors-input">
                                            <label for="dvu-wall-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL8004"
                                                   id="dvu-wall-color13" class="colors-input">
                                            <label for="dvu-wall-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL8017"
                                                   id="dvu-wall-color14" class="colors-input">
                                            <label for="dvu-wall-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL8019"
                                                   id="dvu-wall-color15" class="colors-input">
                                            <label for="dvu-wall-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL9003"
                                                   id="dvu-wall-color16" class="colors-input">
                                            <label for="dvu-wall-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL9006"
                                                   id="dvu-wall-color17" class="colors-input">
                                            <label for="dvu-wall-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL9010"
                                                   id="dvu-wall-color18" class="colors-input">
                                            <label for="dvu-wall-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][wall]" value="RAL9011"
                                                   id="dvu-wall-color19" class="colors-input">
                                            <label for="dvu-wall-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="dvu-brett" class="tab-pane brett">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL1003"
                                                   id="dvu-brett-color1" class="colors-input">
                                            <label for="dvu-brett-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL1014"
                                                   id="dvu-brett-color2" class="colors-input">
                                            <label for="dvu-brett-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL1015"
                                                   id="dvu-brett-color3" class="colors-input">
                                            <label for="dvu-brett-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL3005"
                                                   id="dvu-brett-color4" class="colors-input">
                                            <label for="dvu-brett-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL3009"
                                                   id="dvu-brett-color5" class="colors-input">
                                            <label for="dvu-brett-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL3011"
                                                   id="dvu-brett-color6" class="colors-input">
                                            <label for="dvu-brett-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL5002"
                                                   id="dvu-brett-color7" class="colors-input">
                                            <label for="dvu-brett-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL5005"
                                                   id="dvu-brett-color8" class="colors-input">
                                            <label for="dvu-brett-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL6002"
                                                   id="dvu-brett-color9" class="colors-input">
                                            <label for="dvu-brett-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL6005"
                                                   id="dvu-brett-color10" class="colors-input">
                                            <label for="dvu-brett-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL7004"
                                                   id="dvu-brett-color11" class="colors-input">
                                            <label for="dvu-brett-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL7035"
                                                   id="dvu-brett-color12" class="colors-input">
                                            <label for="dvu-brett-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL8004"
                                                   id="dvu-brett-color13" class="colors-input">
                                            <label for="dvu-brett-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL8017"
                                                   id="dvu-brett-color14" class="colors-input">
                                            <label for="dvu-brett-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL8019"
                                                   id="dvu-brett-color15" class="colors-input">
                                            <label for="dvu-brett-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL9003"
                                                   id="dvu-brett-color16" class="colors-input">
                                            <label for="dvu-brett-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL9006"
                                                   id="dvu-brett-color17" class="colors-input">
                                            <label for="dvu-brett-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL9010"
                                                   id="dvu-brett-color18" class="colors-input">
                                            <label for="dvu-brett-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[dvu][brett]" value="RAL9011"
                                                   id="dvu-brett-color19" class="colors-input">
                                            <label for="dvu-brett-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="odn" class="tab-pane clearfix">
                            <ul class="nav nav-tabs col-lg-3 col-md-3 col-sm-12">
                                <li class="active"><a data-toggle="tab" href="#odn-dach">Крыша</a></li>
                                <li><a data-toggle="tab" href="#odn-wall">Стены</a></li>
                                <li><a data-toggle="tab" href="#odn-brett">Планки обрамления</a></li>
                            </ul>
                            <div class="tab-content col-lg-9 col-md-9 col-sm-12">
                                <div id="odn-dach" class="tab-pane active dach">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL1003"
                                                   id="odn-dach-color1" class="colors-input">
                                            <label for="odn-dach-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL1014"
                                                   id="odn-dach-color2" class="colors-input">
                                            <label for="odn-dach-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL1015"
                                                   id="odn-dach-color3" class="colors-input">
                                            <label for="odn-dach-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL3005"
                                                   id="odn-dach-color4" class="colors-input">
                                            <label for="odn-dach-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL3009"
                                                   id="odn-dach-color5" class="colors-input">
                                            <label for="odn-dach-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL3011"
                                                   id="odn-dach-color6" class="colors-input">
                                            <label for="odn-dach-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL5002"
                                                   id="odn-dach-color7" class="colors-input">
                                            <label for="odn-dach-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL5005"
                                                   id="odn-dach-color8" class="colors-input">
                                            <label for="odn-dach-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL6002"
                                                   id="odn-dach-color9" class="colors-input">
                                            <label for="odn-dach-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL6005"
                                                   id="odn-dach-color10" class="colors-input">
                                            <label for="odn-dach-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL7004"
                                                   id="odn-dach-color11" class="colors-input">
                                            <label for="odn-dach-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL7035"
                                                   id="odn-dach-color12" class="colors-input">
                                            <label for="odn-dach-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL8004"
                                                   id="odn-dach-color13" class="colors-input">
                                            <label for="odn-dach-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL8017"
                                                   id="odn-dach-color14" class="colors-input">
                                            <label for="odn-dach-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL8019"
                                                   id="odn-dach-color15" class="colors-input">
                                            <label for="odn-dach-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL9003"
                                                   id="odn-dach-color16" class="colors-input">
                                            <label for="odn-dach-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL9006"
                                                   id="odn-dach-color17" class="colors-input">
                                            <label for="odn-dach-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL9010"
                                                   id="odn-dach-color18" class="colors-input">
                                            <label for="odn-dach-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][dach]" value="RAL9011"
                                                   id="odn-dach-color19" class="colors-input">
                                            <label for="odn-dach-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="odn-wall" class="tab-pane wall">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL1003"
                                                   id="odn-wall-color1" class="colors-input">
                                            <label for="odn-wall-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL1014"
                                                   id="odn-wall-color2" class="colors-input">
                                            <label for="odn-wall-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL1015"
                                                   id="odn-wall-color3" class="colors-input">
                                            <label for="odn-wall-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL3005"
                                                   id="odn-wall-color4" class="colors-input">
                                            <label for="odn-wall-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL3009"
                                                   id="odn-wall-color5" class="colors-input">
                                            <label for="odn-wall-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL3011"
                                                   id="odn-wall-color6" class="colors-input">
                                            <label for="odn-wall-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL5002"
                                                   id="odn-wall-color7" class="colors-input">
                                            <label for="odn-wall-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL5005"
                                                   id="odn-wall-color8" class="colors-input">
                                            <label for="odn-wall-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL6002"
                                                   id="odn-wall-color9" class="colors-input">
                                            <label for="odn-wall-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL6005"
                                                   id="odn-wall-color10" class="colors-input">
                                            <label for="odn-wall-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL7004"
                                                   id="odn-wall-color11" class="colors-input">
                                            <label for="odn-wall-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL7035"
                                                   id="odn-wall-color12" class="colors-input">
                                            <label for="odn-wall-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL8004"
                                                   id="odn-wall-color13" class="colors-input">
                                            <label for="odn-wall-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL8017"
                                                   id="odn-wall-color14" class="colors-input">
                                            <label for="odn-wall-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL8019"
                                                   id="odn-wall-color15" class="colors-input">
                                            <label for="odn-wall-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL9003"
                                                   id="odn-wall-color16" class="colors-input">
                                            <label for="odn-wall-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL9006"
                                                   id="odn-wall-color17" class="colors-input">
                                            <label for="odn-wall-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL9010"
                                                   id="odn-wall-color18" class="colors-input">
                                            <label for="odn-wall-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][wall]" value="RAL9011"
                                                   id="odn-wall-color19" class="colors-input">
                                            <label for="odn-wall-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="odn-brett" class="tab-pane brett">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL1003"
                                                   id="odn-brett-color1" class="colors-input">
                                            <label for="odn-brett-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL1014"
                                                   id="odn-brett-color2" class="colors-input">
                                            <label for="odn-brett-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL1015"
                                                   id="odn-brett-color3" class="colors-input">
                                            <label for="odn-brett-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL3005"
                                                   id="odn-brett-color4" class="colors-input">
                                            <label for="odn-brett-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL3009"
                                                   id="odn-brett-color5" class="colors-input">
                                            <label for="odn-brett-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL3011"
                                                   id="odn-brett-color6" class="colors-input">
                                            <label for="odn-brett-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL5002"
                                                   id="odn-brett-color7" class="colors-input">
                                            <label for="odn-brett-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL5005"
                                                   id="odn-brett-color8" class="colors-input">
                                            <label for="odn-brett-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL6002"
                                                   id="odn-brett-color9" class="colors-input">
                                            <label for="odn-brett-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL6005"
                                                   id="odn-brett-color10" class="colors-input">
                                            <label for="odn-brett-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL7004"
                                                   id="odn-brett-color11" class="colors-input">
                                            <label for="odn-brett-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL7035"
                                                   id="odn-brett-color12" class="colors-input">
                                            <label for="odn-brett-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL8004"
                                                   id="odn-brett-color13" class="colors-input">
                                            <label for="odn-brett-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL8017"
                                                   id="odn-brett-color14" class="colors-input">
                                            <label for="odn-brett-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL8019"
                                                   id="odn-brett-color15" class="colors-input">
                                            <label for="odn-brett-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL9003"
                                                   id="odn-brett-color16" class="colors-input">
                                            <label for="odn-brett-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL9006"
                                                   id="odn-brett-color17" class="colors-input">
                                            <label for="odn-brett-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL9010"
                                                   id="odn-brett-color18" class="colors-input">
                                            <label for="odn-brett-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[odn][brett]" value="RAL9011"
                                                   id="odn-brett-color19" class="colors-input">
                                            <label for="odn-brett-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="pl" class="tab-pane clearfix">
                            <ul class="nav nav-tabs col-lg-3 col-md-3 col-sm-12">
                                <li class="active"><a data-toggle="tab" href="#pl-dach">Крыша</a></li>
                                <li><a data-toggle="tab" href="#pl-wall">Стены</a></li>
                                <li><a data-toggle="tab" href="#pl-brett">Планки обрамления</a></li>
                            </ul>
                            <div class="tab-content col-lg-9 col-md-9 col-sm-12">
                                <div id="pl-dach" class="tab-pane active dach">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL1003"
                                                   id="pl-dach-color1" class="colors-input">
                                            <label for="pl-dach-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL1014"
                                                   id="pl-dach-color2" class="colors-input">
                                            <label for="pl-dach-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL1015"
                                                   id="pl-dach-color3" class="colors-input">
                                            <label for="pl-dach-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL3005"
                                                   id="pl-dach-color4" class="colors-input">
                                            <label for="pl-dach-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL3009"
                                                   id="pl-dach-color5" class="colors-input">
                                            <label for="pl-dach-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL3011"
                                                   id="pl-dach-color6" class="colors-input">
                                            <label for="pl-dach-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL5002"
                                                   id="pl-dach-color7" class="colors-input">
                                            <label for="pl-dach-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL5005"
                                                   id="pl-dach-color8" class="colors-input">
                                            <label for="pl-dach-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL6002"
                                                   id="pl-dach-color9" class="colors-input">
                                            <label for="pl-dach-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL6005"
                                                   id="pl-dach-color10" class="colors-input">
                                            <label for="pl-dach-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL7004"
                                                   id="pl-dach-color11" class="colors-input">
                                            <label for="pl-dach-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL7035"
                                                   id="pl-dach-color12" class="colors-input">
                                            <label for="pl-dach-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL8004"
                                                   id="pl-dach-color13" class="colors-input">
                                            <label for="pl-dach-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL8017"
                                                   id="pl-dach-color14" class="colors-input">
                                            <label for="pl-dach-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL8019"
                                                   id="pl-dach-color15" class="colors-input">
                                            <label for="pl-dach-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL9003"
                                                   id="pl-dach-color16" class="colors-input">
                                            <label for="pl-dach-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL9006"
                                                   id="pl-dach-color17" class="colors-input">
                                            <label for="pl-dach-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL9010"
                                                   id="pl-dach-color18" class="colors-input">
                                            <label for="pl-dach-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][dach]" value="RAL9011"
                                                   id="pl-dach-color19" class="colors-input">
                                            <label for="pl-dach-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="pl-wall" class="tab-pane wall">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL1003"
                                                   id="pl-wall-color1" class="colors-input">
                                            <label for="pl-wall-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL1014"
                                                   id="pl-wall-color2" class="colors-input">
                                            <label for="pl-wall-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL1015"
                                                   id="pl-wall-color3" class="colors-input">
                                            <label for="pl-wall-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL3005"
                                                   id="pl-wall-color4" class="colors-input">
                                            <label for="pl-wall-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL3009"
                                                   id="pl-wall-color5" class="colors-input">
                                            <label for="pl-wall-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL3011"
                                                   id="pl-wall-color6" class="colors-input">
                                            <label for="pl-wall-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL5002"
                                                   id="pl-wall-color7" class="colors-input">
                                            <label for="pl-wall-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL5005"
                                                   id="pl-wall-color8" class="colors-input">
                                            <label for="pl-wall-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL6002"
                                                   id="pl-wall-color9" class="colors-input">
                                            <label for="pl-wall-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL6005"
                                                   id="pl-wall-color10" class="colors-input">
                                            <label for="pl-wall-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL7004"
                                                   id="pl-wall-color11" class="colors-input">
                                            <label for="pl-wall-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL7035"
                                                   id="pl-wall-color12" class="colors-input">
                                            <label for="pl-wall-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL8004"
                                                   id="pl-wall-color13" class="colors-input">
                                            <label for="pl-wall-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL8017"
                                                   id="pl-wall-color14" class="colors-input">
                                            <label for="pl-wall-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL8019"
                                                   id="pl-wall-color15" class="colors-input">
                                            <label for="pl-wall-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL9003"
                                                   id="pl-wall-color16" class="colors-input">
                                            <label for="pl-wall-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL9006"
                                                   id="pl-wall-color17" class="colors-input">
                                            <label for="pl-wall-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL9010"
                                                   id="pl-wall-color18" class="colors-input">
                                            <label for="pl-wall-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][wall]" value="RAL9011"
                                                   id="pl-wall-color19" class="colors-input">
                                            <label for="pl-wall-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="pl-brett" class="tab-pane brett">
                                    <ul class="colors clearfix">
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL1003"
                                                   id="pl-brett-color1" class="colors-input">
                                            <label for="pl-brett-color1" class="colors-label">
                                                <span class="colors-box" style="background: #f3ad00;"></span>
                                                <span class="colors-name">RAL1003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL1014"
                                                   id="pl-brett-color2" class="colors-input">
                                            <label for="pl-brett-color2" class="colors-label">
                                                <span class="colors-box" style="background: #dfcea2;"></span>
                                                <span class="colors-name">RAL1014</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL1015"
                                                   id="pl-brett-color3" class="colors-input">
                                            <label for="pl-brett-color3" class="colors-label">
                                                <span class="colors-box" style="background: #e4dabe;"></span>
                                                <span class="colors-name">RAL1015</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL3005"
                                                   id="pl-brett-color4" class="colors-input">
                                            <label for="pl-brett-color4" class="colors-label">
                                                <span class="colors-box" style="background: #5e2129;"></span>
                                                <span class="colors-name">RAL3005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL3009"
                                                   id="pl-brett-color5" class="colors-input">
                                            <label for="pl-brett-color5" class="colors-label">
                                                <span class="colors-box" style="background: #642323;"></span>
                                                <span class="colors-name">RAL3009</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL3011"
                                                   id="pl-brett-color6" class="colors-input">
                                            <label for="pl-brett-color6" class="colors-label">
                                                <span class="colors-box" style="background: #771f18;"></span>
                                                <span class="colors-name">RAL3011</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL5002"
                                                   id="pl-brett-color7" class="colors-input">
                                            <label for="pl-brett-color7" class="colors-label">
                                                <span class="colors-box" style="background: #20214f;"></span>
                                                <span class="colors-name">RAL5002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL5005"
                                                   id="pl-brett-color8" class="colors-input">
                                            <label for="pl-brett-color8" class="colors-label">
                                                <span class="colors-box" style="background: #1e2460;"></span>
                                                <span class="colors-name">RAL5005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL6002"
                                                   id="pl-brett-color9" class="colors-input">
                                            <label for="pl-brett-color9" class="colors-label">
                                                <span class="colors-box" style="background: #2d582d;"></span>
                                                <span class="colors-name">RAL6002</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL6005"
                                                   id="pl-brett-color10" class="colors-input">
                                            <label for="pl-brett-color10" class="colors-label">
                                                <span class="colors-box" style="background: #2f4538;"></span>
                                                <span class="colors-name">RAL6005</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL7004"
                                                   id="pl-brett-color11" class="colors-input">
                                            <label for="pl-brett-color11" class="colors-label">
                                                <span class="colors-box" style="background: #969992;"></span>
                                                <span class="colors-name">RAL7004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL7035"
                                                   id="pl-brett-color12" class="colors-input">
                                            <label for="pl-brett-color12" class="colors-label">
                                                <span class="colors-box" style="background: #d7d7d7;"></span>
                                                <span class="colors-name">RAL7035</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL8004"
                                                   id="pl-brett-color13" class="colors-input">
                                            <label for="pl-brett-color13" class="colors-label">
                                                <span class="colors-box" style="background: #781f19;"></span>
                                                <span class="colors-name">RAL8004</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL8017"
                                                   id="pl-brett-color14" class="colors-input">
                                            <label for="pl-brett-color14" class="colors-label">
                                                <span class="colors-box" style="background: #45322e;"></span>
                                                <span class="colors-name">RAL8017</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL8019"
                                                   id="pl-brett-color15" class="colors-input">
                                            <label for="pl-brett-color15" class="colors-label">
                                                <span class="colors-box" style="background: #3b2927;"></span>
                                                <span class="colors-name">RAL8019</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL9003"
                                                   id="pl-brett-color16" class="colors-input">
                                            <label for="pl-brett-color16" class="colors-label">
                                                <span class="colors-box" style="background: #f4f4f4;"></span>
                                                <span class="colors-name">RAL9003</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL9006"
                                                   id="pl-brett-color17" class="colors-input">
                                            <label for="pl-brett-color17" class="colors-label">
                                                <span class="colors-box" style="background: #a5a5a5;"></span>
                                                <span class="colors-name">RAL9006</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL9010"
                                                   id="pl-brett-color18" class="colors-input">
                                            <label for="pl-brett-color18" class="colors-label">
                                                <span class="colors-box" style="background: #ffffff;"></span>
                                                <span class="colors-name">RAL9010</span>
                                            </label>
                                        </li>
                                        <li class="colors-item">
                                            <input type="radio" name="colors[pl][brett]" value="RAL9011"
                                                   id="pl-brett-color19" class="colors-input">
                                            <label for="pl-brett-color19" class="colors-label">
                                                <span class="colors-box" style="background: #262626;"></span>
                                                <span class="colors-name">RAL9011</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-wrap">
                        <div class="image-inner">
                            <div id="image-main"></div>
                            <div id="image-shadow"></div>
                            <div id="image-sub"></div>
                            <div id="image-dach"></div>
                            <div id="image-wall"></div>
                            <div id="image-brett"></div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/calc_sizes.png" alt="расчет размера" class="image-size">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>
