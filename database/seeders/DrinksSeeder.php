<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Drink;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Drink = Drink::create([
            'Title' => '熟成紅茶',
            'SmallTitle' => '解炸物/燒烤肉類油膩，茶味濃郁帶果香',
            'Type' => '經典茶飲',
            'Price' => 30,
            'Description' => '木質帶熟果香調的風味，流露熟齡男子的沈穩氣息，低調而迷人。嚴選自斯里蘭卡產區之茶葉，帶有濃郁果香及淳厚桂圓香氣 ; 與肉類料理一銅品嚐，得以化解舌尖上所殘留的油膩感。',
            'Images' => '/img/demo/drinks/matureBlackTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '麗春紅茶',
            'SmallTitle' => '去除海鮮腥味，茶味較淡帶花香',
            'Type' => '經典茶飲',
            'Price' => 30,
            'Description' => '淡雅輕盈的花香調，可比嬌豔欲滴的罌粟紅花，散發名門閨秀的氣質，優雅而令人傾心。取自罕見的斯里蘭卡中高海拔產區茶葉，帶清爽孤傲的花香；搭配海鮮料理享用，為中和腥羶味的首選。',
            'Images' => '/img/demo/drinks/punceauBlackTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '太妃紅茶',
            'SmallTitle' => '咖啡與茶的神秘比例搭配',
            'Type' => '經典茶飲',
            'Price' => 35,
            'Description' => '咖啡與紅茶的絕妙搭配—— 鮮明風味於口中融合暈染，描繪出復古情懷的文青少女，在Café裡敲著打字機、傳來紙張與墨水帶的振振聲響。咖啡豆的淬煉注入紅茶的芬芳，淡柔飄散的麥香，所謂「復刻經典」。',
            'Images' => '/img/demo/drinks/ToffeeBlackTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '胭脂紅茶',
            'SmallTitle' => '絲絨般的蜜桃果香',
            'Type' => '經典茶飲',
            'Price' => 40,
            'Description' => '恬淡的果香調與一抹蜜桃風味，伴隨玫瑰與茉莉花香的情蜜纏綿，好似唇抹胭脂的綺麗女子。清新的紅茶如髮簪鑲嵌的金絲紋理，將60年代華洋集於一身的氛圍，化為迷人的戀舊意識。',
            'Images' => '/img/demo/drinks/rougeBlackTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '春芽綠茶',
            'SmallTitle' => '綠茶，糸系般的蜜桃果香',
            'Type' => '經典茶飲',
            'Price' => 30,
            'Description' => '縱身綠叢、提筆描繪的青山少年，在春滿四溢的山林中擁抱自然、探索枝芽於舌尖的渴望。萃取自台灣綠茶，蘊含繁茂枝葉所飽存的風土，初嚐甘甜圓潤與低苦澀，青翠欲滴即不絕於口。',
            'Images' => '/img/demo/drinks/springBudGreenTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '雪花冷露',
            'SmallTitle' => '手工冬瓜獨奏',
            'Type' => '經典茶飲',
            'Price' => 30,
            'Description' => '出於精煉的冬瓜，經歲月的火侯，成就獨有的韻味及香氣，彷彿古厝裡安然自得、望著懷舊時鐘的老奶奶，一會兒迎著藺草扇起的微風、配著收音機，享受溫煦的午後人生。',
            'Images' => '/img/demo/drinks/snowflakes.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '熟成冷露',
            'SmallTitle' => '手工冬瓜與茶更神秘比例搭配',
            'Type' => '經典茶飲',
            'Price' => 30,
            'Description' => '冬瓜與紅茶的極致特調，慢火入味的冬瓜香氣將清沁滑順的紅茶帶入另一種層次。回憶起於雨煙橋下抽著煙斗、曾經年少的阿公，在舊識中迂迴的嫵媚，作為生活與樸實的調和劑。',
            'Images' => '/img/demo/drinks/mutureColdDew.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '春芽冷露',
            'SmallTitle' => '手工冬瓜綠茶',
            'Type' => '經典茶飲',
            'Price' => 30,
            'Description' => '春芽冷露是一股耐人尋味的質感，如同愛好茶酒和詩詞的阿伯。冬瓜陳年的尾韻，於茶葉清甜圓潤的餘韻下回甘，兩者所釋放的渾厚香氣，尋尋覓覓使人意猶未盡，適合與文學一同啜飲。',
            'Images' => '/img/demo/drinks/springBudColdDew.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '春梅冰茶',
            'SmallTitle' => '春梅與冬瓜相遇',
            'Type' => '經典茶飲',
            'Price' => 45,
            'Description' => '春梅與冬瓜的相遇，好比舅舅的古著襯衫與耀金項鍊，花漾點綴的70年代感。純熟煉製的冬瓜，配上鮮酸柔滑的梅子，將酸甜爽口的滋味層層堆疊，懷舊風情令人醉心。',
            'Images' => '/img/demo/drinks/chunmeilcedTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '熟成寧果',
            'SmallTitle' => '春梅與冬瓜相遇',
            'Type' => '經典茶飲',
            'Price' => 50,
            'Description' => '如同愛情小品中的少女，帶著初戀的羞澀與心上人赴約，配上酸甜濃郁的檸檬蛋糕，在靦腆的午後時光綻放少女情懷。整顆新鮮檸檬浸漬於茶中，輕盈爽口而純淨，不多不少7分糖，甜意、情意剛剛好。',
            'Images' => '/img/demo/drinks/ripeLemonade.jpeg',
            'Size' => 'M',
        ]);

        $Drink = Drink::create([
            'Title' => '雪藏紅茶',
            'SmallTitle' => '春梅與冬瓜相遇',
            'Type' => '經典茶飲',
            'Price' => 55,
            'Description' => '白雪融於紅茶中而蔓延，厚實的茶韻與冰淇淋的奶甜相互交織，逐漸化開成香濃醇和的奶茶。綿綿情意浸潤於唇齒之間，響起一首苦情男女的老歌，花落紅塵的情感交雜，勾人心魂的萬千情愫。',
            'Images' => '/img/demo/drinks/icedBlackTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '冷露歐雷',
            'SmallTitle' => '手工冬瓜與鮮奶',
            'Type' => '經典茶飲',
            'Price' => 50,
            'Description' => '冬瓜與濃醇鮮奶一絲一著、輕巧地流露於唇齒間，雅緻的氣味宛如裁縫女子手中的針線，絲絲入扣地編織交纏，飲啜之間伴隨期盼歸來的情感，一股熟悉的奶香與甜香。',
            'Images' => '/img/demo/drinks/coldDewOle.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '熟成歐雷',
            'SmallTitle' => '熟成鮮奶茶',
            'Type' => '經典茶飲',
            'Price' => 50,
            'Description' => '渲染漸變的茶色，猶如街頭嬉皮風趣的男子，口中恣意地哼著音階。濃郁的紅茶香，本是味覺記憶中的絕品，與溫順甘醇的鮮奶兩相平衡，為奶茶的底蘊更添一股味蕾衝擊，絲滑細膩使人覺醒。',
            'Images' => '/img/demo/drinks/matureOlay.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '白玉歐雷',
            'SmallTitle' => '珍奶不解釋',
            'Type' => '經典茶飲',
            'Price' => 50,
            'Description' => '台灣手搖飲不可或缺的經典—— 珍珠鮮奶茶。軟嫩嚼感的白玉珍珠，恰似摩登女子的珍珠首飾，以奢華感獨領風潮。與熟成歐蕾完美結合，口感厚實而層次豐富，是一場難以忘懷的味覺饗宴。',
            'Images' => '/img/demo/drinks/baiYuOulei.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '春鳳冰茶',
            'SmallTitle' => '',
            'Type' => '限定飲品',
            'Price' => 65,
            'Description' => '微酸香甜的鳳梨果肉冰條配上輕盈粉漾的麗春紅茶，以鳳梨醬為基底蜜汁般濃郁的熱帶氣息一傾清爽孤傲的花香，以金桔點綴融入酸甜滋味的口感平衡，藉由清爽的香氣為初春帶來不一樣的氛圍。',
            'Images' => '/img/demo/drinks/ChunfengIcedTea.jpeg',
            'Size' => 'L',
        ]);

        $Drink = Drink::create([
            'Title' => '胭脂多多',
            'SmallTitle' => '蜜桃裡的兒時記憶',
            'Type' => '限定飲品',
            'Price' => 65,
            'Description' => '以粉色水蜜桃呼應擁有美妙歌聲的「胖丁」角色，蜜桃韻味為基底的胭脂紅茶，加入酸甜滋味恰如其分的養樂多，勾起甜而不膩的兒時回憶，伴隨著玫瑰與茉莉花香的恬淡，如同陶醉沈浸於純淨的音符之中，如初而美好。',
            'Images' => '/img/demo/drinks/alotOfRouge.jpeg',
            'Size' => 'L',
        ]);
    }
}
