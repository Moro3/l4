<!DOCTYPE html>
<html>
<head>
  <title>{{ $title }}</title>
  
  <?= stylesheet_link_tag('application') ?>
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


  <?= javascript_include_tag('application') ?>
</head>
<body>
<div class="block-all">  
  <div class="container block-main">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="row">
          <div class="col-xs-12 col-md-12 block-top"></div>        
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="logo"><a href="/">{{ image_tag('logo.gif') }}</a></div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="enter"><a href="/">{{ image_tag('enter.gif') }}</a></div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="menu-top">
              <ul>
                <li>Доставка</li>
                <li>Оплата</li>
                <li>Контакты</li>
                <?php
                  //print_r(Config::get('database.connections')); 
                ?>
              </ul>
            </div>
            <div class="registration">
              <a href="/">{{ image_tag('reg.gif') }}</a>&nbsp;<a href="/">регистрация</a>
            </div>
            <div class="basket">
              <a href="/">{{ image_tag('basket.gif') }}</a>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-xs-12 col-md-12 block-middle">
            <div class="row">
              <div class="col-xs-2 col-md-3">
                <div class="block-side-left">
                  <div class="block-menu-left text-center">
                    <h4>Категории:</h4>
                    <ul class="list-inline list-unstyled">
                      <li>{{ image_tag('goods/categories/awesome.gif', array('alt' => 'офигенные', 'title' => 'офигенные')) }}</li>
                      <li>{{ image_tag('goods/categories/bad.gif', array('alt' => 'плохие', 'title' => 'плохие')) }}</li>
                      <li>{{ image_tag('goods/categories/beautiful.gif', array('alt' => 'красивые', 'title' => 'красивые')) }}</li>
                      <li>{{ image_tag('goods/categories/evil.gif', array('alt' => 'злые', 'title' => 'злые')) }}</li>
                    
                      <li>{{ image_tag('goods/categories/funny.gif', array('alt' => 'смешные', 'title' => 'смешные')) }}</li>
                      <li>{{ image_tag('goods/categories/gift.gif', array('alt' => 'в подарок', 'title' => 'в подарок')) }}</li>
                      <li>{{ image_tag('goods/categories/murderous.gif', array('alt' => 'убийственные', 'title' => 'убийственные')) }}</li>
                      <li>{{ image_tag('goods/categories/very_bad.gif', array('alt' => 'очень плохие', 'title' => 'очень плохие')) }}</li>
                    </ul>
                  </div>
                  <div class="block-news-left hidden-xs">
                    <h4>Новости:</h4>
                    <div class="news-item-left">
                      <div class="name">Скидка на злые</div>
                      <div class="text text-justify"><small>С 1 апреля теперь можно заказать футболку с рисунком «злые» со скидкой 50%</small></div>
                    </div>
                    <div class="news-item-left">
                      <div class="name">Скидка на злые</div>
                      <div class="text text-justify">С 1 апреля теперь можно заказать футболку с рисунком «злые» со скидкой 50%</div>
                    </div>
                    <div class="news-item-left">
                      <div class="name">Скидка на злые</div>
                      <div class="text text-justify">С 1 апреля теперь можно заказать футболку с рисунком «злые» со скидкой 50%</div>
                    </div>
                  </div>
                  <div class="block-goods-left text-center">
                    <h4>Спецпредложения:</h4>
                    <div class="goods-item-left">                      
                      {{ image_tag('drawings/better_than.gif', array('alt' => 'лучше чем', 'title' => 'лучше чем')) }}
                      <div class="name">Лучше чем......</div>
                      <div class="price">350 руб.</div>
                    </div>
                    <div class="goods-item-left">                      
                      {{ image_tag('drawings/shashlik.gif', array('alt' => 'шашлык', 'title' => 'шашлык')) }}
                      <div class="name">шашлык</div>
                      <div class="price">350 руб.</div>
                    </div>
                    <div class="goods-item-left">                      
                      {{ image_tag('drawings/zorro.gif', array('alt' => 'зорро', 'title' => 'зорро')) }}
                      <div class="name">зорро</div>
                      <div class="price">350 руб.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-10 col-md-9">
                <div class="block-side-middle">
                  <div class="row">
                    <div class="col-xs-12 col-md-12 hidden-xs center-block">
                      {{ image_tag('baners/banner-1.jpg', array('class'=>'img-responsive img-rounded', 'alt' => 'Банер', 'title' => 'Банер')) }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-md-12">
                      @include('layouts.nav')

                      @section('promo')
                        Подарки для постоянных покупателей<br>
                        Каждому новому покупателю - майка в подарок
                      @stop
                        <div class='promo'>
                          Распродажа
                        </div>
                      @yield('content')
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-md-12 block-footer hidden-xs">
            {{ image_tag('logo_white.gif', array('class'=>'logo-footer', 'alt' => 'Лого', 'title' => 'Лого')) }}
            <div class="row">
              <div class="col-xs-4 col-md-4 center-block text-right">
                <ul class="list-unstyled">
                  <li>О нас</li>
                  <li>8 (916) 640 9807</li>
                  <li>zakaz@email.ru</li>
                </ul>
              </div>              
              <div class="col-xs-4 col-md-4 center-block text-center">
                <ul class="list-unstyled list-border">
                  <li>Сумки</li>
                  <li>Футболки</li>
                  <li>Спецпредложения</li>
                </ul>
              </div>
              <div class="col-xs-4 col-md-4 center-block text-left">
                <ul class="list-unstyled">
                  <li>Гарантия</li>
                  <li>Обмен</li>
                  <li>Возврат</li>
                </ul>

              </div>
              

            </div>
          </div>
        </div>
        

      </div>

    </div>
  </div>
</div>
</body>
</html>


