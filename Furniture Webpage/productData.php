<?php

$collectionArr = [
    ["catCode"=>"ac", "catName"=>"Armchair"],
    ["catCode"=>"sf", "catName"=>"Sofa"],
    ["catCode"=>"st", "catName"=>"Side Table"],
    ["catCode"=>"ct", "catName"=>"Coffee Table"],
    ["catCode"=>"dt", "catName"=>"Table"],
    ["catCode"=>"cs", "catName"=>"Chair / Stool"],
    ["catCode"=>"sb", "catName"=>"Side Board"],

];

$productArr = ["ac" => ["001" => ["dimension"=>"H: 85 W: 67 D: 72",  "price"=>850.00 , "images"=>7], 
                        "002" => ["dimension"=>"H: -- W: -- D: --",  "price"=>860.00 , "images"=>7], 
                        "003" => ["dimension"=>"H: 95 W: 71 D: 90",  "price"=>890.00 , "images"=>7], 
                        "004" => ["dimension"=>"H: 78 W: 68 D: 78",  "price"=>740.00 , "images"=>4], 
                        "005" => ["dimension"=>"H: 102 W: 69 D: 90", "price"=>890.00 , "images"=>7], 
                        "006" => ["dimension"=>"H: 89 W: 80 D: 86",  "price"=>1280.00, "images"=>7], 
                        "007" => ["dimension"=>"H: 78 W: 66 D: 66",  "price"=>680.00 , "images"=>7], 
                        "008" => ["dimension"=>"H: 80 W: 78 D: 74",  "price"=>800.00 , "images"=>7], 
                        "009" => ["dimension"=>"H: 94 W: 64 D: 88",  "price"=>790.00 , "images"=>5], 
                        "010" => ["dimension"=>"H: 83 W: 68 D: 72",  "price"=>850.00 , "images"=>7], 
                        "011" => ["dimension"=>"H: 70 W: 66 D: 77",  "price"=>860.00 , "images"=>7], 
                        "012" => ["dimension"=>"H: 88 W: 84 D: 88",  "price"=>1280.00, "images"=>7], 
                        "013" => ["dimension"=>"H: 80 W: 70 D: 84",  "price"=>860.00 , "images"=>7], 
                        "014" => ["dimension"=>"H: 82 W: 68 D: 80",  "price"=>780.00 , "images"=>7], 
                        "015" => ["dimension"=>"H: 82 W: 72 D: 78",  "price"=>890.00 , "images"=>7], 
                        "016" => ["dimension"=>"H: 75 W: 59 D: 47",  "price"=>780.00 , "images"=>7], 
                        "017" => ["dimension"=>"H: 90 W: 77 D: 83",  "price"=>1280.00, "images"=>7], 
                        "018" => ["dimension"=>"H: -- W: -- D: --",  "price"=>680.00 , "images"=>5], 
                        "020" => ["dimension"=>"H: 74 W: 63 D: 89",  "price"=>860.00 , "images"=>4]],
		"sf" => ["001" => ["dimension"=>"H: 82 W: 126 D: 60", "price"=>1200.00, "images"=>6], 
                         "002" => ["dimension"=>"H: 79 W: 180 D: 86", "price"=>1880.00, "images"=>5], 
                         "003" => ["dimension"=>"H: 80 W: 180 D: 74", "price"=>1800.00, "images"=>3], 
                         "004" => ["dimension"=>"H: 78 W: 175 D: 78", "price"=>1750.00, "images"=>3], 
                         "005" => ["dimension"=>"H: 85 W: 180 D: 72", "price"=>1800.00, "images"=>4], 
                         "006" => ["dimension"=>"H: 70 W: 174 D: 70", "price"=>1880.00, "images"=>7], 
                         "007" => ["dimension"=>"H: -- W: --- D: --", "price"=>1580.00, "images"=>4]], 
		"st" => ["001" => ["dimension"=>"H: 40 W: 60 D: 37",  "price"=>300.00 , "images"=>7], 
                         "002" => ["dimension"=>"H: 46 W: 60 D: 35",  "price"=>350.00 , "images"=>7], 
                         "003" => ["dimension"=>"H: 45 W: 58 D: 38",  "price"=>740.00 , "images"=>7], 
                         "004" => ["dimension"=>"H: 62 W: 100 D: 55", "price"=>850.00 , "images"=>7], 
                         "006" => ["dimension"=>"H: 58 W: 75 D: 32",  "price"=>580.00 , "images"=>7], 
                         "007" => ["dimension"=>"H: 40 W: 58 D: 58",  "price"=>280.00 , "images"=>5], 
                         "008" => ["dimension"=>"H: 50 W: 75 D: 50",  "price"=>380.00 , "images"=>5]], 
		"ct" => ["001" => ["dimension"=>"H: 45 W: 120 D: 50", "price"=>740.00 , "images"=>7], 
                         "002" => ["dimension"=>"H: 52 W: 154 D: 55", "price"=>870.00 , "images"=>7], 
                         "003" => ["dimension"=>"H: 52 W: 130 D: 48", "price"=>800.00 , "images"=>7], 
                         "004" => ["dimension"=>"H: 50 W: 138 D: 55", "price"=>820.00 , "images"=>5], 
                         "005" => ["dimension"=>"H: 45 W: 100 D: 100","price"=>740.00 , "images"=>4], 
                         "006" => ["dimension"=>"H: -- W: -- D: --",  "price"=>720.00 , "images"=>7]], 
		"dt" => ["001" => ["dimension"=>"H: 74 W: 160 D: 80", "price"=>860.00 , "images"=>3], 
                         "002" => ["dimension"=>"H: 73 W: 160 D: 80", "price"=>890.00 , "images"=>5], 
                         "003" => ["dimension"=>"H: 86 W: 100 D: 71", "price"=>1280.00, "images"=>7]], 
                "cs" => ["001" => ["dimension"=>"H: 44 W: 60 D: 38",  "price"=>220.00 , "images"=>6], 
                         "002" => ["dimension"=>"H: 83 W: 48 D: 49",  "price"=>350.00 , "images"=>4], 
                         "003" => ["dimension"=>"H: -- W: -- D: --",  "price"=>340.00 , "images"=>7], 
                         "004" => ["dimension"=>"H: 76 SH: 64 W: 37 D: 40",  "price"=>380.00 , "images"=>5], 
                         "005" => ["dimension"=>"H: -- W: -- D: --",  "price"=>420.00 , "images"=>7], 
                         "006" => ["dimension"=>"H: -- W: -- D: --",  "price"=>320.00 , "images"=>6], 
                         "007" => ["dimension"=>"H: -- W: -- D: --",  "price"=>340.00 , "images"=>4], 
                         "008" => ["dimension"=>"H: 76 W: 53 D: 56",  "price"=>350.00 , "images"=>5], 
                         "009" => ["dimension"=>"H: 78 W: 51 D: 52",  "price"=>360.00 , "images"=>5]],
		"sb" => ["001" => ["dimension"=>"H: 60 W: 130 D: 50", "price"=>1200.00, "images"=>6], 
                         "002" => ["dimension"=>"H: 80 W: 170 D: 50", "price"=>1800.00, "images"=>7], 
                         "003" => ["dimension"=>"H: 70 W: 131 D: 50", "price"=>1280.00, "images"=>7], 
                         "004" => ["dimension"=>"H: 80 W: 90 D: 42",  "price"=>860.00 , "images"=>7], 
                         "005" => ["dimension"=>"H: 50 W: 170 D: 50", "price"=>1280.00, "images"=>7], 
                         "006" => ["dimension"=>"H: 75 W: 180 D: 50", "price"=>1890.00, "images"=>7], 
                         "007" => ["dimension"=>"H: 60 W: 160 D: 50", "price"=>1580.00, "images"=>4], 
                         "008" => ["dimension"=>"H: 60 W: 160 D: 50", "price"=>1480.00, "images"=>5]]
];


$newsArr = [
  ["Subheader One Here", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio."], 
  ["Subheader Two Here", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio."], 
  ["Subheader Three Here", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio."]
];





?>

