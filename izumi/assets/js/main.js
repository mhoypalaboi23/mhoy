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
aLangKeys['en']['alka-detail']='The alkaStream AOK Non-Electric Alkaline Water Ionizer is comprised of 8 filter layers that deliver the cleanest possible water out of your tap. Unlike many water filters on the market, alkaStream AOK keeps all of the healthy minerals in, so your body receives all the proper nourishment that our body needs.:';
aLangKeys['en']['izumi-intro']='Izumi is now known to us as the access to the fountain of life; but even before all that, we should tell you about the Izumi Inspiration – the Izumi Man. A British journalist for the Guinness Book of Records was on an assignment to interview Shigechiyo Izumi, the world’s oldest documented living person, a 115-year-old man in remarkably good health. The journalist was amazed by Izumi’s vitality and the fact that he had worked until the age of 105.';
aLangKeys['en']['read-more']='Read More';
aLangKeys['en']['izumi-mean']='What is IZUMI KANGEN WATER ® ?';
aLangKeys['en']['izumi-defi']='Izumi Kangen Water is delicious water created from enagics innovative water technology. Not only do these devices filter your tap water, but they also produce ionized alkaline and acidic water through electrolysis. These waters can be used for various purposes, including drinking, cooking, beauty, and cleaning';
aLangKeys['en']['device']='Devices form Izumi produce 5 differeent types of water These water types have many health benefits';
aLangKeys['en']['s-kangen']='Strong kangen® water';
aLangKeys['en']['i-kangen']='IZUMI kangen® water';
aLangKeys['en']['n-water']='Natural Water';
aLangKeys['en']['s-acidic']='Strong Acidic Water';
aLangKeys['en']['featured']='Featured Products';
aLangKeys['en']['anti-chlorine']='Anti-Chlorine Vita-C Shower Filter';
aLangKeys['en']['anti-chlorine-detail']='Right after a rigorous physical activity, nothing can be more comforting than a hot shower. Besides, who doesn’t like hot showers especially in the cold mornings? The thing about hot showers though is that the hot water causes our pores to open up, making chlorine very easy to seep through our skin. Chlorine is the cheapest way for water distribution companies to disinfect water. The risk though is that large amounts of chlorine over time can be detrimental to health.';
aLangKeys['en']['antioxidant']='Antioxidant Alkaline Water Ionizer (Digital)';
aLangKeys['en']['antioxidant-detail']='Enjoy Healthy and Organic Food without the hassle of buying from all-organic farms or searching for expensive organic food in the supermarket.';
aLangKeys['en']['nutritional']='Nutritional Cooking System';
aLangKeys['en']['nutritional-detail']='The Izumi Nutritional Cooking System is proud to bring you the world’s finest cookware that meets your demands for healthy cooking that’s easy and energy-efficient.';
aLangKeys['en']['izumi-energy']='IZUMI ENERGY BRACELETS';
aLangKeys['en']['izumi-energy-detail']='Your Izumi Energy Bracelet leads the field in high-technological jewelry, with five types of constant-release energies that benefit the wearer.';
aLangKeys['en']['dispenser']='IZUMI Bottleless Hot & Cold Ultrafiltration Water Dispenser';
aLangKeys['en']['dispenser-detail']='This free-standing dispenser has two water options – hot and cold – ideal to wake up your senses with coffee or quench your thirst with a cool glass of water. It can heat or cool up to 30 gallons per hour and can bring convenience to your home or office.';
aLangKeys['en']['invest']='INVEST IN YOUR HEALTH';
aLangKeys['en']['now-chlorine']='Now you can enjoy your bath more with Izumi Anti-Chlorine Vita-C Shower Filter that gets rid of chlorine in the water. Chlorine in water dries up the skin and with accumulated high amounts can actually cause cancer.';
aLangKeys['en']['izumi-filter']='Izumi Anti-Chlorine Vita-C Shower Filter takes out chlorine through its Vita-C gel filter that is equivalent to 3,000 lemons. Its patented triangular holes give off negative ions in the shower. These specialized filters help prevent skin and scalp diseases and conditions such as eczema, psoriasis, skin asthma, falling hair, and dandruff. Healthy skin and hair is a fresh and invigorating shower away!';
aLangKeys['en']['benefit']='BENEFITS';
aLangKeys['en']['reduce-chlorine']='Reduces over 98% Chlorine for tap water before it touches your skin';
aLangKeys['en']['reduce-soap']='Reduces soap film build-up';
aLangKeys['en']['remove-cancer']='Removes Cancer-causing agent chlorine from the water';
aLangKeys['en']['fight-problem']='Fights against skin problem such as Psoriasis, Skin Cancer, and Skin Asthma';
aLangKeys['en']['falling-hair']='Prevents Dandruff build up and Falling Hair';
aLangKeys['en']['save-water']='Saves 10 to 25% on water from your regular daily bathing';
aLangKeys['en']['no-tools']='No tools required';
aLangKeys['en']['easy-replace']='Easy to replace filter cartridge';
aLangKeys['en']['features']='FEATURES';
aLangKeys['en']['micro-fabric']='Micro-Fabric filter helps remove contaminants, rust and floating particles';
aLangKeys['en']['aroma-vita']='Comes with Aroma-Vita C gel filter that lasts up to 6,000 liters';
aLangKeys['en']['anti-bacterial']='Anti-bacterial ceramic balls help prevents germs in the water';
aLangKeys['en']['food-sterilizer']='Izumi Pro-organic Food Sterilizer';
aLangKeys['en']['nowadays']='Nowadays, people live in an environment with all kinds of pollution. The residual pesticide in vegetables and fruits is always with us in the daily life that harms our health. Therefore, it is an urgent task for us to clean and eat organic food!';
aLangKeys['en']['safe-organic']='Use the Izumi Pro-Organic Food Sterilizer to make your food SAFE & ORGANIC!';
aLangKeys['en']['food-remove']='Izumi Pro-Organic Food Sterilizer removes contaminants in both air and water by technology of corona discharge active oxygen generation. Active oxygen can be utilized to attain rapid sterilization, disinfection, preservation, and deodorization.';
aLangKeys['en']['how-it-work']='HOW IT WORKS (How to Turn Your Chicken Organic)';
aLangKeys['en']['convert-oxygen']='Izumi Pro-Organic Food Sterilizer converts oxygen (O2) in water to active oxygen (O3), which effectively eliminates bacteria and chemicals in food, disinfect and deodorize surroundings.';
aLangKeys['en']['before-cooking']='Before cooking, chicken should be submerged in water which contains active oxygen to decompose growth hormones so it will not affect our body system and prevent illness';
aLangKeys['en']['after-minute']='After a few minutes, hormones are separated from chicken and will be suspended in the water';
aLangKeys['en']['active-oxygen']='FOOD: Active oxygen decomposes pesticides making the food organic and fresh.';
aLangKeys['en']['air-sanitize']='AIR: The sterilizer also effectively sanitizes the air and eliminates foul odor within the environment.';
aLangKeys['en']['body-water']='BODY: Sterilized water gets rid of various skin fungus. Also, gargling with it gets rid of the bacteria in the mouth!';
aLangKeys['en']['leaving-toxic']='Leaving no toxic residues in air and water and keeps the freshness of Fruits and Vegetables';
aLangKeys['en']['effective-sanitizer']='Is a very effective sanitizer';
aLangKeys['en']['saves-time']='Saves you time and money in purchasing from organic markets';
aLangKeys['en']['eliminate']='Eliminates mold and mildew around your home';
aLangKeys['en']['get-rid']='Gets rid of foul odor especially smoke coming from cigarettes';
aLangKeys['en']['prevents']='Prevents contamination in food';
aLangKeys['en']['teat-minor']='Can be used to treat minor cuts and wounds';
aLangKeys['en']['converts-food']='Converts your food to organic';
aLangKeys['en']['its-harmful']='It removes harmful chemicals such as pesticides, insecticides and other food contaminants';
aLangKeys['en']['discharge']='It has corona discharge active oxygen generation';
aLangKeys['en']['specification']='SPECIFICATIONS';
aLangKeys['en']['model']='Model Code:';
aLangKeys['en']['tech-para']='Technical Parameters:';
aLangKeys['en']['power']='Power Supply:';
aLangKeys['en']['rated']='Rated Power:';
aLangKeys['en']['ozone']='Ozone Output:';
aLangKeys['en']['product-weight']='Product Weight:';
aLangKeys['en']['demension']='Dimensions:';
aLangKeys['en']['oxygen-active']='Converts oxygen (O2) in water to active oxygen (O3)';



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
aLangKeys['ja']['izumi-intro']='泉は今命の泉へのアクセスとして私たちに知られている。泉マン - それでも、すべてその前に、私たちは泉のインスピレーションについて説明してくれなければならない。ギネスブックのための英国のジャーナリストはShigechiyo泉、世界最古の文書化された生きている人、著しく健康で115歳の男性にインタビューを割り当てていた。ジャーナリストは、泉の活力と、彼は105歳まで働いていたという事実に驚いた。';
aLangKeys['ja']['read-more']='続きを読む';
aLangKeys['ja']['izumi-defi']='泉冠水はenagics革新的な水技術から作成されたおいしい水である。これらのデバイスは、あなたの水道水をろ過するが、彼らはまた、電気分解によってアルカリイオンと酸性水を生成するかだけでなく、。これらの水は、飲料、料理、美容、クリーニングなどのさまざまな目的に使用することができ';
aLangKeys['ja']['device']='デバイスは、泉は、これらの水タイプは、多くの健康上の利点を持っている水5の異なる種類を生成する生成';
aLangKeys['ja']['s-kangen']='強いkangen®水';
aLangKeys['ja']['i-kangen']='IZUMIの冠のWater®';
aLangKeys['ja']['n-water']='天然水';
aLangKeys['ja']['b-water']='美容水';
aLangKeys['ja']['s-acidic']='強酸性水';
aLangKeys['ja']['featured']='おすすめ商品';
aLangKeys['ja']['anti-chlorine']='アンチ塩素ビタ-Cシャワーフィルター';
aLangKeys['ja']['anti-chlorine-detail']='右厳格な身体活動の後、何も熱いシャワーよりも励みになることはできません。また、誰が、特に寒い朝に熱いシャワーが好きではない？ホットシャワーについての事は、しかし、熱水が私たちの皮膚を介して浸透する塩素は非常に簡単に作り、私たちの毛穴を開くこと引き起こすことである。塩素は水配給会社が水を消毒するための最も安価な方法です。リスクは、しかし時間をかけて、塩素の大量の健康に有害であるということです。';
aLangKeys['ja']['antioxidant']='抗酸化アルカリ水イオナイザー（デジタル）';
aLangKeys['ja']['antioxidant-detail']='すべての有機農場からの購入やスーパーで高価な有機食品を検索する手間をかけずに健康でオーガニック食品をお楽しみください。';
aLangKeys['ja']['nutritional']='栄養調理システム';
aLangKeys['ja']['nutritional-detail']='泉栄養調理システムはあなたに簡単かつエネルギー効率のだ健康的な調理にあなたの要求を満たしている世界最高級の調理器具を持って誇りに思っています。';
aLangKeys['ja']['izumi-energy']='IZUMIエナジーブレスレット';
aLangKeys['ja']['izumi-energy-detail']='あなたの泉エナジーブレスレットは、着用者の利益に一定の放出エネルギーの5種類で、高技術の宝石のフィールドをリードしています。';
aLangKeys['ja']['dispenser']='泉Bottlelessホット＆コールド限外ウォーターディスペンサー';
aLangKeys['ja']['dispenser-detail']='ホットとコールド - - コーヒーをあなたの感覚を目覚めや水の冷たいガラスとあなたの喉の渇きを癒すために理想的なこの自立型ディスペンサーは、2つの水のオプションがあります。それは熱や時間あたり30ガロンにまで冷却して、ご自宅やオフィスに利便性をもたらすことができます。';
aLangKeys['ja']['invest']='あなたの健康に投資';
aLangKeys['ja']['now-chlorine']='今、あなたは、水に塩素を取り除く和泉アンチ塩素ビタ-Cシャワーフィルターでより多くのお風呂を楽しむことができます。水中の塩素は肌を乾燥させると、蓄積された高の金額は、実際にがんを引き起こす可能性があります。';
aLangKeys['ja']['izumi-filter']='泉アンチ塩素ビタ-Cシャワーフィルターは3000レモンと等価であるそのビタ-Cゲルフィルタを通して塩素を取り出す。特許取得三角穴がシャワー中のマイナスイオンを放つ。これらの特殊なフィルタは、肌や頭皮疾患や湿疹、乾癬、皮膚喘息、抜け毛、フケなどの条件を防ぐのを助ける。健康な皮膚や髪が新鮮で爽快シャワーの距離です！';
aLangKeys['ja']['benefit']='メリット';
aLangKeys['ja']['reduce-chlorine']='それはあなたの肌に触れる前に、水道水の98％以上の塩素を削減';
aLangKeys['ja']['reduce-soap']='石鹸フィルムの蓄積を削減';
aLangKeys['ja']['remove-cancer']='水からがんの原因となるエージェントの塩素を除去します';
aLangKeys['ja']['fight-problem']='乾癬、皮膚癌、および皮膚の喘息のような皮膚の問題と戦う';
aLangKeys['ja']['falling-hair']='フケが落ちると髪を構築できないように';
aLangKeys['ja']['save-water']='通常の毎日の入浴から水の上に百分の10から25を保存します';
aLangKeys['ja']['no-tools']='いいえツールは必要ありません';
aLangKeys['ja']['easy-replace']='フィルターカートリッジを交換しやすい';
aLangKeys['ja']['features']='特長';
aLangKeys['ja']['micro-fabric']='マイクロファブリックフィルターは、汚染物質、錆や浮遊粒子を除去するのに役立ちます';
aLangKeys['ja']['aroma-vita']='6000リットルまで持続アロマヴィータCゲルフィルターが付属しています';
aLangKeys['ja']['anti-bacterial']='抗菌セラミックボールヘルプが水に細菌を防ぐ';
aLangKeys['ja']['food-sterilizer']='泉プロの有機食品殺菌';
aLangKeys['ja']['nowadays']='今日では、人々は汚染のすべての種類がある環境に住んでいます。野菜や果物の残留農薬は、私たちの健康に害を与える日常生活の中で私達と常にある。そのため、私たちはきれいにし、有機食品を食べることが緊急課題となっている！';
aLangKeys['ja']['safe-organic']='あなたの食べ物は安全＆オーガニックにする和泉プロ有機食品殺菌を使用してください！';
aLangKeys['ja']['food-remove']='泉プロ有機食品殺菌は、コロナ放電活性酸素生成の技術によって、空気と水の両方中の汚染物質を除去します。活性酸素は、迅速な殺菌、消毒、保存、及び脱臭を達成するために利用することができる。';
aLangKeys['ja']['how-it-work']='それがどのように動作するか（あなたのチキンオーガニックを有効にする方法）';
aLangKeys['ja']['convert-oxygen']='それがどのように動作する泉（あなたのチキンオーガニックを有効にする方法）プロ有機食品殺菌を効果的に消毒し、周囲を脱臭、食品中の細菌や化学物質を排除し、活性酸素（O 3）、水の酸素（O 2）に変換する。';
aLangKeys['ja']['injected']='ニワトリは、それらの成長を高速化するホルモンを注射する';
aLangKeys['ja']['before-cooking']='それが私たちの体のシステムに影響を与え、病気を防ぐことはできませんので、調理する前に、鶏は、成長ホルモンを分解するために活性酸素が含まれている水に沈めなければならない';
aLangKeys['ja']['after-minute']='数分後、ホルモンは、ニワトリから分離され、水に懸濁される';
aLangKeys['ja']['active-oxygen']='食べ物：活性酸素は、農薬、食品、有機や新鮮な作り分解する。';
aLangKeys['ja']['air-sanitize']='空気：殺菌にも効果的に空気をサニタイズし、環境内で悪臭を除去します。';
aLangKeys['ja']['leaving-toxic']='空気と水には有毒な残留物を残さず、果物と野菜の鮮度を保つ';
aLangKeys['ja']['effective-sanitizer']='非常に効果的な殺菌剤はありますか';
aLangKeys['ja']['saves-time']='有機市場から購入することであなたの時間とお金を節約';
aLangKeys['ja']['eliminate']='あなたの家の周りのカビを排除';
aLangKeys['ja']['get-rid']='特にタバコから煙悪臭を取り除く';
aLangKeys['ja']['prevents']='食品の汚染を防ぎます';
aLangKeys['ja']['teat-minor']='軽い切り傷や傷を治療するために使用することができます';
aLangKeys['ja']['converts-food']='オーガニックにあなたの食べ物に変換';
aLangKeys['ja']['body-water']='本体：滅菌水は、各種皮膚真菌を取り除く。また、それをうがいは口の中の細菌を取り除きます！';
aLangKeys['ja']['its-harmful']='それは、農薬、殺虫剤および他の食品の汚染物質などの有害な化学物質を取り除き';
aLangKeys['ja']['discharge']='これは、コロナ放電、活性酸素の生成を有する';
aLangKeys['ja']['specification']='仕様';
aLangKeys['ja']['model']='モデルコード：';
aLangKeys['ja']['tech-para']='技術的パラメータ：';
aLangKeys['ja']['power']='電源：';
aLangKeys['ja']['rated']='定格電力：';
aLangKeys['ja']['ozone']='オゾン出力：';
aLangKeys['ja']['product-weight']='製品重量：';
aLangKeys['ja']['demension']='寸法：';
aLangKeys['ja']['oxygen-active']='活性酸素に水中の酸素（O 2）に変換する（O3）';





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

