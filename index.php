<?php
$api = [
    'key' => '9208',
    'secret' => '9RdGLfXuS4hNdDRjQjFtkeFtVjdi4qqW',
    'flow_url' => 'https://leadrock.com/URL-E282F-F9367'
];

function send_the_order($post, $api)
{
    $params = [
        'flow_url' => $api['flow_url'],
        'user_phone' => $post['phone'],
        'user_name' => $post['name'],
        'other' => $post['data'],
        'ip' => $_SERVER['REMOTE_ADDR'],
        'ua' => $_SERVER['HTTP_USER_AGENT'],
        'api_key' => $api['key'],
        'sub1' => $post['sub1'],
        'sub2' => $post['sub2'],
        'sub3' => $post['sub3'],
        'sub4' => $post['sub4'],
        'sub5' => $post['sub5'],
        'ajax' => 1,
    ];
    $url = 'https://leadrock.com/api/v2/lead/save';

    $trackUrl = $params['flow_url'] . (strpos($params['flow_url'], '?') === false ? '?' : '&') . http_build_query($params);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $trackUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $params['track_id'] = curl_exec($ch);

    $params['sign'] = sha1(http_build_query($params) . $api['secret']);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_exec($ch);
    curl_close($ch);

    header('Location: ' . (empty($post['success_page']) ? 'success.html' : $post['success_page']));
}

if (!empty($_POST['phone'])) {
    send_the_order($_REQUEST, $api);
}

if (!empty($_GET)) {
?>
    <script type="text/javascript">
        window.onload = function() {
            let forms = document.getElementsByTagName("form");
            for(let i=0; i<forms.length; i++) {
                let form = forms[i];
                form.setAttribute('action', form.getAttribute('action') + "?<?php echo http_build_query($_GET)?>");
                form.setAttribute('method', 'post');
            }
        };
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="RU">

<head>
  <title>Giacca per qualsiasi tempo Tactical Jacket</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=480">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description"
    content="Questo modello è stato creato appositamente per le persone attive che passano molto tempo all'aria aperta. Pioggia, vento, neve e persino sole caldo: in tutto il tempo Tactical Jacket ti farà sentire altrettanto a tuo agio.">
</head>

<body>
  <div class="main_wrapper">
    <header class="offer_section offer3">
      <div class="title_block">
        <p class="subtitle"> Giacca per qualsiasi tempo </p>
        <h1 class="main_title"> Tactical Jacket</h1>
      </div>
      <div class="timer_block clearfix">
        <p> Offerta<br>dura:</p>
        <div class="timer clearfix">
          <div class="timer_item">
            <div class="text"> giorni</div>
            <div class="count"> 00</div>
          </div>
          <div class="timer_item">
            <div class="text"> ore</div>
            <div class="count hours"></div>
          </div>
          <div class="timer_item">
            <div class="text"> minuti</div>
            <div class="count minutes"></div>
          </div>
          <div class="timer_item">
            <div class="text"> secondi</div>
            <div class="count seconds"></div>
          </div>
        </div>
      </div>
      <div class="image_block">
        <img class="offer_image" src="img/2toy6y0o7y8.png" alt>
        <div class="discount_block">
          <div class="value">50%</div>
          <div class="text rtr"> di sconto</div>
        </div>
        <div class="desc"> Comfort in qualsiasi tempo<span> da -20C a +15C</span>
        </div>
      </div>
      <div class="benefits_list clearfix">
        <div class="benefit_item"> Per attività all'aperto</div>
        <div class="benefit_item"> Protezione in qualsiasi tempo</div>
        <div class="benefit_item"> Non si sporca e non si strappa</div>
      </div>
      <div class="price_block clearfix">
        <div class="price_item old">
          <div class="text"> Prezzo vecchio:</div>
          <div class="value"> 138&euro;</div>
        </div>
        <div class="price_item new">
          <div class="text"><span> Il tuo beneficio è 50%</span></div>
          <div class="value"> 69&euro;</div>
        </div>
      </div>
      <ul>
        <li> Impermeabile</li>
        <li> Antivento</li>
        <li> Materiale super resistente</li>
      </ul>
      <a href="#order_form" class="button"> Ordinare con lo sconto</a>
      <div class="products_count"> Rimangono <b> 15</b> giacche</div>
    </header>
    <section class="description_section">
      <h2 class="title">
        <span> Giacca per qualsiasi tempo Tactical Jacket</span> è la scelta migliore per le attività all'aria aperta e
        gli sport all'aria aperta! </h2>
      <img src="img/jxo8koiidni.png" alt>
      <div class="text_block">
        <p> Questo modello è stato creato appositamente per le persone attive che passano molto tempo all'aria aperta.
          Pioggia, vento, neve e persino sole caldo: in tutto il tempo Tactical Jacket ti farà sentire altrettanto a tuo
          agio.</p>
        <p> Sport, sci, paintball, pesca e caccia o semplicemente passeggiare per la città: fai quello che vuoi con
          questa giacca incredibilmente elegante.</p>
        <p><b> Tactical Jacket è indispensabile in ogni situazione!</b></p>
      </div>
    </section>
    <section class="sect2">
      <h2 class="title">
        <span> Vantaggi principali della</span> giacca Tactical Jacket </h2>
      <div class="benefits_list1">
        <div class="benefit_item">
          <img src="img/lceqic1tne9.png" alt>
          <span> 01</span>
          <p> Resistente al vento e all'acqua - ideale per la pesca o le escursioni</p>
        </div>
        <div class="benefit_item">
          <img src="img/t9es51ha9t.png" alt>
          <span> 02</span>
          <p> Per tutti i tuoi dispositivi elettronici</p>
        </div>
        <div class="benefit_item">
          <img src="img/bqaeacvmtbd.png" alt>
          <span> 03</span>
          <p> Un sacco di comode tasche per le piccole cose: tutto sarà a portata di mano</p>
        </div>
        <div class="benefit_item">
          <img src="img/yx1lcq5z1cq.png" alt>
          <span> 04</span>
          <p> Il sistema di ventilazione fornisce aria fresca e neutralizza l'odore sgradevole del sudore</p>
        </div>
      </div>
    </section>
    <section class="sect3">
      <h2 class="title"> Colori e<span> caratteristiche</span></h2>
      <div class="color_cat">
        <div class="item">
          <img src="img/dmkyy6wqs0j.png" alt>
          <p> Nero</p>
          <a href="#order_form" class="button"> Selezionare</a>
        </div>
        <div class="item">
          <img src="img/ipq5nhsxyu.png" alt>
          <p> Verde</p>
          <a href="#order_form" class="button"> Selezionare</a>
        </div>
      </div>
      <div class="characteristics_list1">
        <div class="characteristic_item">
          <div class="text"> Tessuto esterno:</div>
          <div class="value"> Arctic-Tech (195 g/m2): 75% poliestere /15% cotone /10% kevlar, strato impermeabile DWR
            (Durable Water Repellent), impregnazione a prova di fuoco </div>
        </div>
        <div class="characteristic_item">
          <div class="text"> Il baiettone</div>
          <div class="value"> Materiale isolante termico</div>
        </div>
        <div class="characteristic_item">
          <div class="text"> Taglie:</div>
          <div class="value"> S, M, L, XL, XXL</div>
        </div>
      </div>
    </section>
    <section class="reviews3_section">
      <h2 class="title"> Recensioni:</h2>
      <div class="reviews_stats_block">
        <p><b> 98%</b> degli acquirenti raccomandano questo prodotto</p>
        <div class="line"></div>
      </div>
      <div class="reviews_list3 owl-carousel">
        <div class="review_item">
          <div class="author_block clearfix">
            <img class="avatar" src="img/laef1bo3y5.png" alt>
            <div class="author_info">
              <div class="name"> Paolo Ricese,</div>
              <div class="text"> 39 anni</div>
            </div>
          </div>
          <div class="text_block">
            <p> Ho comprato questa giacca all'inizio dell'inverno. Sono già riuscito a fare snowboard e andare a pesca
              in inverno. È indispensabile! Oltre alla praticità, sembra molto elegante: si può anche camminare per la
              città. Sono decisamente soddisfatto dell'acquisto e lo consiglio a tutti!</p>
          </div>
        </div>
        <div class="review_item">
          <div class="author_block clearfix">
            <img class="avatar" src="img/gypfz9tr9ct.png" alt>
            <div class="author_info">
              <div class="name"> Anna Rossi</div>
              <div class="text"> 32 anni</div>
            </div>
          </div>
          <div class="text_block">
            <p> Ho ordinato una giacca come regalo per mio marito! Il pacco è arrivato a Roma in due settimane,
              l'imballaggio è buono. Ero preoccupata per la taglia, così la giacca potrebbe essere piccola, ma va tutto
              bene! La qualità è eccellente, è ben cucita, ottimo colore (verde) e sembra molto maschile.</p>
          </div>
        </div>
        <div class="review_item">
          <div class="author_block clearfix">
            <img class="avatar" src="img/1rx8krvpygd.png" alt>
            <div class=" author_info">
              <div class="name"> Lorenzo Neri</div>
              <div class="text"> 35 anni</div>
            </div>
          </div>
          <div class="text_block">
            <p> È arrivato ottobre, è tempo di pensare all'inverno! Ho comprato questa giacca tattica e ... è
              fantastica! Non ostacola il movimento, è antivento, impermeabile. L'acqua scorre semplicemente e non passa
              all'interno del materiale. Nel complesso, è una buona giacca invernale!</p>
          </div>
        </div>
      </div>
      <a href="#order_form" class="button"> Ordina ad un prezzo scontato</a>
    </section>
    <section class="order_steps_section">
      <h2 class="title"> Come ordinare?</h2>
      <div class="order_steps_list1 clearfix">
        <div class="step_item">
          <h4> Ordine</h4>
          <p> Effettua un ordine sul nostro sito web</p>
        </div>
        <div class="step_item">
          <h4> Chiamata</h4>
          <p> Il responsabile aggiornerà i dettagli</p>
        </div>
        <div class="step_item">
          <h4> Consegna</h4>
          <p> Consegniamo le merci entro 1-3 giorni</p>
        </div>
        <div class="step_item">
          <h4> Ricevimento</h4>
          <p> Pagamento al ricevimento</p>
        </div>
      </div>
    </section>
    <section class="offer_section offer3">
      <div class="title_block">
        <p class="subtitle"> Giacca per qualsiasi tempo</p>
        <h2 class="main_title"> Tactical Jacket</h2>
      </div>
      <div class="timer_block clearfix">
        <p> Offerta<br>dura:</p>
        <div class="timer clearfix">
          <div class="timer_item">
            <div class="text"> giorni</div>
            <div class="count"> 00</div>
          </div>
          <div class="timer_item">
            <div class="text"> ore</div>
            <div class="count hours"></div>
          </div>
          <div class="timer_item">
            <div class="text"> minuti</div>
            <div class="count minutes"></div>
          </div>
          <div class="timer_item">
            <div class="text"> secondi</div>
            <div class="count seconds"></div>
          </div>
        </div>
      </div>
      <div class="image_block">
        <img class="offer_image" src="img/1a1buyqco3i.png" alt>
        <div class="discount_block">
          <div class="value">50%</div>
          <div class="text rtr"> di sconto</div>
        </div>
        <div class="desc"> Comfort in qualsiasi tempo<span> da -20C a +15C</span>
        </div>
      </div>
      <div class="benefits_list clearfix">
        <div class="benefit_item"> Per attività all'aperto</div>
        <div class="benefit_item"> Protegge dalla pioggia e dal vento</div>
        <div class="benefit_item"> Non si sporca e non si strappa</div>
      </div>
      <div class="price_block clearfix">
        <div class="price_item old">
          <div class="text"> Prezzo vecchio:</div>
          <div class="value"> 138&euro;</div>
        </div>
        <div class="price_item new">
          <div class="text"><span> Il tuo beneficio è 50%</span></div>
          <div class="value"> 69&euro;</div>
        </div>
      </div>
      <form method="POST" action="" id="order_form">
        <label for="name2"> Per esempio: Luigi Benavente</label>
        <input id="name2" type="text" name="name" placeholder="Il tuo nome" required>
        <label for="phone2"> Per esempio: +39XXXXXXXXXX</label>
        <input id="phone2" type="tel" name="phone" placeholder="Numero di telefono" required>
        <button type="submit" class="button"> Ordinare ora</button>
      </form>
      <div class="products_count"> Rimangono <b> 15</b> giacche a prezzo ridotto</div>
    </section>
    <footer class="footer">
      <p style="text-align: center"> Trazard inc. Grenadierstrasse 12, floor 9-16 4058 Basel, Switzerland
        <br>
        <a href="rules_it.html" target="_blank"> Politica sulla privacy</a>
      </p>
    </footer>
  </div>







  <div class="callback-btn">
    <img src="img/nyb7mvaqks.png" alt>
  </div>
  <div class="callback-form hide">
    <form class="form lead_form" action="" style="padding: 20px 0;" method="POST">
      <label for="form_name1" style="padding: 0 0 0 10px; color: #fff"> Per esempio: Luigi Benavente</label>
      <input id="form_name1" class="name" type="text" name="name" placeholder="Il tuo nome" required
        style="margin-bottom: 20px;">
      <label for="form_phone1" style="padding: 0 0 0 10px; color: #fff"> Per esempio: +39XXXXXXXXXX</label>
      <input id="form_phone1" class="phone" type="tel" name="phone" placeholder="Numero di telefono" required>
      <button class="orange-btn primary_btn" type="submit"> effetuare l´ordine</button>
    </form>

    <img src="img/ek3hds4z4z4.svg" alt="Close">
  </div>

  <link rel="stylesheet" type="text/css" href="css/p4ghbqupbgr.css">
  <link rel="stylesheet" type="text/css" href="css/k9utgp2yhp.css">
  <link rel="stylesheet" type="text/css" href="css/lgw9icp304k.css">

  <script src="js/s1qhl5dmvd.js"></script>
  <script src="js/o0snyg2kypb.js"></script>
  <script>
    $(".callback-btn").click(function () {
      $(".callback-form").toggleClass("hide");
    });

    $(".show-callback").click(function () {
      $(".callback-form").removeClass("hide");
    });

    $(document).click(function (e) {
      if (
        $(e.target).closest(
          $(".callback-form, .callback-btn, .show-callback")
        ).length > 0
      ) {
        return;
      }
      $(".callback-form").addClass("hide");
    });

    $('img[src="img/ek3hds4z4z4.svg"]').click(function () {
      $(".callback-form").addClass("hide");
    });
  </script>
  <script src="js/q8znztt7ied.js"></script>
  <script src="js/cz0dgvlbk4.js"></script>



</body>

</html>