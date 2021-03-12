<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####" . PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
array_push($names, "斎藤");
print_r($names);
echo PHP_EOL;


print("#####q2#####" . PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

# 以下に回答を記載
$array = array_merge($array1, $array2);
print_r($array);

echo PHP_EOL;

print("#####q3#####" . PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

# 以下に回答を記載
$NumCount = 0;
foreach ($numbers as $number) {
  if ($number === 3) {
    $NumCount++;
  }
}
echo $NumCount;

echo PHP_EOL;

print("#####q4#####" . PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

# 以下に回答を記載
$sports = array_filter($sports, 'myFilter');
function myFilter($val)
{
  return !($val === null);
}
print_r($sports);

echo PHP_EOL;

print("#####q5#####" . PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

# 以下に回答を記載
var_export(empty($array1));
echo PHP_EOL;
var_export(empty($array2));

echo PHP_EOL;

print("#####q6#####" . PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

# 以下に回答を記載
$numbers2 = [];
foreach ($numbers1 as $number1) {
  $number1 *= 10;
  array_push($numbers2, $number1);
}
print_r($numbers2);

echo PHP_EOL;

print("#####q7#####" . PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

# 以下に回答を記載
$array = array_map('intval', $array);

# 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####" . PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

# 以下に回答を記載
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

# 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####" . PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
$menbers = [];
foreach ($names as $key => $value) {
  $key = $key + 1;
  array_push($menbers, "会員No." . $key . " " . $value);
}
print_r($menbers);
echo PHP_EOL;

print("#####q10#####" . PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼"];

# 以下に回答を記載
$preference = [];
foreach ($foods as $food) {
  if (preg_match("/うに/", $food) === 1) {
    array_push($preference, "好物です");
  } else {
    array_push($preference, "まぁまぁ好きです。");
  }
}
print_r($preference);

echo PHP_EOL;

print("#####q11#####" . PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

# 以下に回答を記載
$AllSports = [];
$No = 1;
foreach ($sports as $sport) {
  if (is_array($sport)) {
    $AllSports = array_merge($AllSports, $sport);
  } else {
    array_push($AllSports, $sport);
  }
}
$AllSports = array_unique($AllSports);
echo "ユーザーの趣味一覧";
echo PHP_EOL;
foreach ($AllSports as $key => $value) {
  echo "No." . $No . " " . $value;
  $No++;
  echo PHP_EOL;
}
echo PHP_EOL;

print("#####q12#####" . PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

# 以下に回答を記載
echo $data["user"]["name"];
echo PHP_EOL;

print("#####q13#####" . PHP_EOL);
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

# 以下に回答を記載
$user_data["age"] = $update_data["age"];
$user_data["address"] = $update_data["address"];
print_r($user_data);
echo PHP_EOL;

print("#####q14#####" . PHP_EOL);
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

# 以下に回答を記載
print_r(array_values($data));
echo PHP_EOL;

print("#####q15#####" . PHP_EOL);
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

# 以下に回答を記載
function keyCheck($value)
{
  if (array_key_exists("age", $value)) {
    echo "OK";
  } else {
    echo "NG";
  }
}
keyCheck($data1);
echo PHP_EOL;
keyCheck($data2);

echo PHP_EOL;

print("#####q16#####" . PHP_EOL);
$users = [
  ["name" => "satou", "age" => 22],
  ["name" => "yamada", "age" => 12],
  ["name" => "takahashi", "age" => 32],
  ["name" => "nakamura", "age" => 41]
];

# 以下に回答を記載
foreach ($users as $user) {
  echo "私の名前は" . $user["name"] . "です。年齢は" . $user["age"] . "歳です。";
  echo PHP_EOL;
}

echo PHP_EOL;

print("#####q17#####" . PHP_EOL);
class User
{

  private $name;
  private $age;
  private $gender;

  public function __construct($name, $age, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender =  $gender;
  }

  public function info()
  {
    echo "名前：" . $this->name;
    echo PHP_EOL;
    echo "年齢：" . $this->age;
    echo PHP_EOL;
    echo "性別：" . $this->gender;
    echo PHP_EOL;
  }
}

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------" . PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####" . PHP_EOL);

# コードを追加
class Man
{
  private $name;
  private $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function introduce()
  {
    if ($this->age <= 12) {
      echo "はいさいまいど～, " . $this->name . "です！！！";
      echo PHP_EOL;
    } else {
      echo "こんにちは, " . $this->name . "と申します。宜しくお願いいたします。";
      echo PHP_EOL;
    }
  }
}
$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####" . PHP_EOL);
class Item
{
  # 以下を修正して下さい

  public $name;

  function __construct($book_name)
  {
    $this->name = $book_name;
  }
}
# 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name . PHP_EOL);
echo PHP_EOL;

print("#####q20#####" . PHP_EOL);
class Human
{
  public $name;
  public $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

class Zoo
{
  public $zooName;
  public $fee;

  public function __construct($zooName, $fee)
  {
    $this->zooName = $zooName;
    $this->fee = $fee;
  }
  public function info_entry_fee($human)
  {
    if ($human->age <= 3) {
      echo $human->name . "さんの入場料金は" . $this->fee['infant'] . "円です。";
      echo PHP_EOL;
    } elseif ($human->age <= 18) {
      echo $human->name . "さんの入場料金は" . $this->fee['children'] . "円です。";
      echo PHP_EOL;
    } elseif ($human->age <= 65) {
      echo $human->name . "さんの入場料金は" . $this->fee['adult'] . "円です。";
      echo PHP_EOL;
    } else {
      echo $human->name . "さんの入場料金は" . $this->fee['senior'] . "円です。";
      echo PHP_EOL;
    }
  }
}

$zoo = new Zoo("旭山動物園", ["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);
echo PHP_EOL;

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach ($humans as $human) {
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;

print("#####q21#####" . PHP_EOL);
$numbers = range(1, 30);
foreach ($numbers as $number) {
  if ($number % 3 === 0 && $number % 5 === 0 && $number % 7 === 0) {
    echo "FizzBuzzHoge";
    echo PHP_EOL;
  } elseif ($number % 3 === 5 && $number % 7 === 0) {
    echo "BuzzHoge";
    echo PHP_EOL;
  } elseif ($number % 3 === 0 && $number % 5 === 0) {
    echo "FizzBuzz";
    echo PHP_EOL;
  } elseif ($number % 3 === 0 && $number % 7 === 0) {
    echo "FizzHoge";
    echo PHP_EOL;
  } elseif ($number % 3 === 0) {
    echo "Fizz";
    echo PHP_EOL;
  } elseif ($number % 5 === 0) {
    echo "Buzz";
    echo PHP_EOL;
  } elseif ($number % 7 === 0) {
    echo "Hoge";
    echo PHP_EOL;
  } else {
    echo $number;
    echo PHP_EOL;
  }
}
