<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title>
  <?php wp_head(); ?>
</head>
<body>
<header>
<!-- traducir -->
<?php $currentlang = get_bloginfo('language');
if($currentlang=="en-US"):
  //home
    //carrusel
      $view = 'Book Now'; 
    //navbar1
      $money_dollar = 'Dollar';
      $money_yuan = 'Yuan';
    //navbar2
      $home = "Home";
      $destinations_and_plans = 'Destinations and plans';
      $reviews = 'Reviews'; 
      $colombia = 'Colombia';
      $blog = 'Blog';
      $contact = 'Contact'; 
    //por que colombia
      $why= 'Why Colombia?';
      $colombia_description = "There's a place where kindness, joy, diversity, flavor and music come together"; 
    //home-description
      $description = 'Come explore Latin America with us and enjoy the best trip of your life. We offer Trips to every end of the colombia';
    //home pplanes y destinos
      $destinations = 'Destinations'; 
      $plans = 'Plans';

    //post
      $read = 'Read More'; 

    //about
      $about = 'About Us';
      $description_about = 'We are Anditrip, your travel agent, we wanna share with you the amazing culture and experience that Latin America offers. Come with us.';
      $quick_contact = 'Quick Contact';
      $colombia_footer = 'Colombia';
     

  //page -> oferta
    //description
      $description_offers = 'Description';
?>
<?php else:
  //traducción chino
  //home
    //carrusel
      $view = '查看更多'; 
      //navbar1
      $money_dollar = '美元';
      $money_yuan = '元';
    //navbar2
      $home = "家";
      $destinations_and_plans = '目的地和計劃';
      $reviews = '評測'; 
      $colombia = '哥倫比亞';
      $blog = '博客';
      $contact = '聯繫'; 

    //pplanes y destinos
      $destinations = '目的地'; 
      $plans = '計劃';

    //por que colombia
      $why = '為何選擇哥倫比亞'; 
      $colombia_description = "有一個地方，善良，喜悅，多樣性，味道和音樂匯聚在一起";
    //home-description
      $description = '快來和我們一起探索拉丁美洲，享受你生命中最美好的旅程。我們為哥倫比亞的每一端提供旅行';
    //home pplanes y destinos
      $destinations = '目的地'; 
      $plans = '計劃';

    //post
      $read = '目的地'; 
     

    //about
      $about = '關於我們';
      $description_about = '我們是Anditrip，您的旅行社，我們想與您分享拉丁美洲提供的驚人文化和體驗。跟我們來。';
      $quick_contact = '快速聯繫';
      $colombia_footer = '哥倫比亞';
   

  //page -> oferta
    //description
      $description_offers = '描述';
    
 ?>
<?php endif; ?>
<?php $index = get_permalink(); ?>
  <nav class="navbar navbar-default header_top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/anditrip/index.php" class="nav-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_anditrip.png" width="140px">
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <div class="buscador">
              <form class="form-buscador" action="index.html" method="post">
                <input id="express-form-typeahead" type="search" name="" value="" placeholder="Search...">
              </form>
              <a id="active-search" for="#express-form-typeahead" class="fa fa-search"></a>
            </div>
          </li>
          <li class="dropdown currency"><a href="index.php/?wmc-currency=USD"><i class="fa fa-usd"></i><?php echo $money_dollar; ?><b class="caret"></b></a>
            <ul class="dropdown-menu currency1">
                <li><a href="index.php/?wmc-currency=CNY" class="text-center"><i class="fa fa-jpy"></i> <?php echo $money_yuan; ?></a></li>
            </ul>
          </li>
          <li class="dropdown language"><a href="?lang=en">English<b class="caret"></b></a>
            <ul class="dropdown-menu language1">
              <li><a href="?lang=zh" class="text-center">中国</a></li>
            </ul>
          </li>

          <li><a href="mailto:joe@example.com?subject=feedback">info@anditrip.com</a></li>
          <li><a href="#"><i class="fa fa-phone"></i> 234-235-5678</a></li>
          <li><a href="#"><i class="fa fa-wechat fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-mobile fa-2x"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-default navbar-principal">
    <div class="container">
      <div class="">
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php if ($index == ''): ?>
              <li><a href="<?php echo bloginfo('url');?>"><?php echo $home;?></a></li>
              <li><a href="#destinations-plans"><?php echo $destinations_and_plans;?></a></li>
              <li><a href="#reviews"><?php echo $reviews;?></a></li>
              <li><a href="#colombia"><?php echo $colombia;?></a></li>
              <li><a href="#blog"><?php echo $blog;?></a></li>
              <li><a href="#footer"><?php echo $contact;?></a></li>
            <?php else: ?>
              <li><a href="<?php echo bloginfo('url');?>"><?php echo $home;?></a></li>
              <li><a href="<?php echo bloginfo('url').'/#destinations-plans';?>"><?php echo $destinations_and_plans; ?></a></li>
              <li><a href="<?php echo bloginfo('url').'/#reviews';?>"><?php echo $reviews;?></a></li>
              <li><a href="<?php echo bloginfo('url').'/#colombia';?>"><?php echo $colombia;?></a></li>
              <li><a href="<?php echo bloginfo('url').'/#blog';?>"><?php echo $blog;?></a></li>
              <li><a href="#footer?>"><?php echo $contact;?></a></li>
              
              
            <?php endif ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
<div class="test">
  
