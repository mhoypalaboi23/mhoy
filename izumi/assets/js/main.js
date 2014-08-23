$('#myCarousel').carousel({
  interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});

$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});


// single product js





// preparing language file
var aLangKeys=new Array();
aLangKeys['en']=new Array();
aLangKeys['ja']=new Array();

aLangKeys['en']['select-lang']='Select your language';
aLangKeys['en']['japanese']='Japanese';
aLangKeys['en']['home']='HOME';
aLangKeys['en']['about']='ABOUT US';
aLangKeys['en']['products']='PRODUCTS';
aLangKeys['en']['water']='WATER ESSENTIALS';
aLangKeys['en']['kitchen']='KITCHEN ESSENTIALS';
aLangKeys['en']['air']='AIR ESSENTIALS';
aLangKeys['en']['home-essential']='HOME ESSENTIALS';
aLangKeys['en']['health']='HEALTH ESSENTIALS';
aLangKeys['en']['contact']='CONTACT US';
aLangKeys['en']['izumi-inspiration']='Izumi is now known to us as the access to the fountain of life; but even before all that, we should tell you about the Izumi Inspiration – the Izumi Man…';
aLangKeys['en']['british']='A British journalist for the Guinness Book of Records was on an assignment to interview Shigechiyo Izumi, the world’s oldest documented living person, a 115-year-old man in remarkably good health.';
aLangKeys['en']['journalist']='The journalist was amazed by Izumi’s vitality and the fact that he had worked until the age of 105.';
aLangKeys['en']['remarkable']='The journalist realized most of the islands’ inhabitants were physically fit, with long lifespans and low incidences of serious illness. A team of researchers came to the island to answer this question and made some remarkable discoveries. They found the water the islanders drank was different from water found anywhere else in the world.';
aLangKeys['en']['drinking']='They were drinking from a preserved water source with unique characteristics. Not only does it contain many essential minerals, it is also very alkaline, with a pH between 7 and 8.5.';
aLangKeys['en']['part']='In other parts of the world, cultures such as the Hunzas of North Pakistan, the Tibetans, Armenians, Azerbajans, and the Titicacas of Peru, all live long and healthy lives, with no degenerative disease. The only source of water for all these cultures is melting glacier water – small-clustered water, with alkaline pH, and very high in antioxidants.';
aLangKeys['en']['developed']='Izumi since then has developed a range of health and wellness appliances and items that answer most health problems of today’s lifestyle.';
aLangKeys['en']['forefront']='Izumi is and will always be at the forefront of the health and wellness industry. We, at Izumi, have heavily invested on extensive research, the latest in cutting-edge science, and world-class facilities that comply with the highest manufacturing and safety standards to deliver only the best.';
aLangKeys['en']['vakufit']='Vakufit Hydrocleaning Machine';
aLangKeys['en']['vaku-detail']='The affordable hydro cleaning machine is a german technology and manufactured cleaning system that utilizes water filtration technology to clean air and sanitize your home. Vakufit is advanced with water filtration technology that can aid you in extraordinary deep cleaning. It will turn your house into a home. Never settle for less.';
aLangKeys['en']['more']='More Info';
aLangKeys['en']['pro-aqua']='Pro-Aqua Air and Room Cleaning System';
aLangKeys['en']['pro-aqua-detail']='Clean air is healthy air! The innovative and aesthetically designed cleaning system uses only water as a';
aLangKeys['en']['alkastream']='alkaStream AOK Non-Electric Alkaline Ionizer';
aLangKeys['en']['description']='Description:';
aLangKeys['en']['alka-detail']='The alkaStream AOK Non-Electric Alkaline Water Ionizer is comprised of 8 filter layers that deliver the cleanest possible water out of your tap. Unlike many water filters on the market, alkaStream AOK keeps all of the healthy minerals in, so your body receives all the proper nourishment that our body needs.:';


aLangKeys['ja']['select-lang']='言語を選択してください';
aLangKeys['ja']['japanese']='日本人';
aLangKeys['ja']['home']='ホーム';
aLangKeys['ja']['about']='会社概要';
aLangKeys['ja']['products']='プロダクツ';
aLangKeys['ja']['water']='水の必需品';
aLangKeys['ja']['kitchen']='キッチンの必需品';
aLangKeys['ja']['air']='空気の必需品';
aLangKeys['ja']['home-essential']='家庭の必需品';
aLangKeys['ja']['health']='健康の必需品';
aLangKeys['ja']['contact']='私達に連絡';
aLangKeys['ja']['izumi-inspiration']='泉は今命の泉へのアクセスとして私たちに知られている。それでも、すべてその前に、私たちは泉インスピレーションについて説明してくれなければならない - 泉マン...';
aLangKeys['ja']['british']='ギネスブックのための英国のジャーナリストはShigechiyo泉、世界最古の文書化された生きている人、著しく健康で115歳の男性にインタビューを割り当てていた。';
aLangKeys['ja']['journalist']='ジャーナリストは、泉の活力と、彼は105歳まで働いていたという事実に驚いた。';
aLangKeys['ja']['remarkable']='ジャーナリストの島」の住民のほとんどは、長い寿命と深刻な病気の発生率が低いと、物理的に適合させたが実現。研究チームは、この質問に答えるために島に来て、いくつかの注目すべき発見をした。彼らは、島民が飲んだ水は、世界のどこにも見つから水とは異なっていたが見つかりました。';
aLangKeys['ja']['drinking']='彼らはユニークな特性を持つ保存水源から飲んでいた。だけでなく、それはそれは7と8.5の間のpHで、また非常にアルカリ性であり、多くの必須ミネラルが含まれていません。';
aLangKeys['ja']['part']='世界の他の地域では、そのような北パキスタンのHunzas、チベット人、アルメニア人、Azerbajans、ペルーのTiticacas、すべてのような文化が無い変性疾患で、長く健康な生活を。アルカリ性のpHで、小型のクラスター化水と、抗酸化物質が非常に高い - すべてのこれらの培養のための水の唯一の供給源は、氷河の水を溶融されています。...';
aLangKeys['ja']['developed']='泉はそれ以来、今日のライフスタイルの中で最も健康問題に答える健康とウェルネス家電製品やアイテムの範囲を開発しました。';
aLangKeys['ja']['forefront']='泉は、常に健康とウェルネス業界の最前線になります。私たちは、泉で、重く、最高のを提供するために、最も高い製造業や安全基準を遵守広範な研究、最先端の科学の最新の、そして世界クラスの施設に投資している。';
aLangKeys['ja']['vakufit']='Vakufit Hydrocleaningマシン';
aLangKeys['ja']['vaku-detail']='手頃な価格の水力掃除機は、空気をきれいにし、あなたの家を消毒する水のろ過技術を利用し、ドイツの技術と製造された洗浄システムです。 Vakufit臨時深いクリーニングであなたを助けることができる水のろ過技術で進んでいる。それは家にあなたの家を向けるだろう。少ないために解決しないでください。';
aLangKeys['ja']['more']='詳細情報';
aLangKeys['ja']['pro-aqua']='プロアクア航空ルームクリーニングシステム';
aLangKeys['ja']['pro-aqua-detail']='清浄空気は健康空気である！革新的かつ審美的に設計された洗浄システムとして水だけを使用しています';
aLangKeys['ja']['alkastream']='alkaStream AOK非電気アルカリイオナイザー';
aLangKeys['ja']['description']='説明：';
aLangKeys['ja']['alka-detail']='alkaStream AOK非電気アルカリ水イオナイザーは、あなたのタップから可能な限りクリーンな水を提供する8のフィルタ層から構成されている。市場には多くの水フィルターとは異なり、alkaStream AOKは健康なミネラルのすべて保持しますので、あなたの体は、その私たちの体のニーズすべてに適切な栄養を受け取る。';



$(document).ready(function() {

    // onclick behavior
    $('.lang').click( function() {
        var lang = $(this).attr('id'); // obtain language id

        // translate all translatable elements
        $('.tr').each(function(i){
          $(this).text(aLangKeys[lang][ $(this).attr('key') ]);
        });

    } );

});

