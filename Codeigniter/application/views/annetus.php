<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$config = array(
    "digest_alg" => "sha1",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
$res = openssl_pkey_new($config);
openssl_pkey_export($res, $private_key);

$now = new DateTime(null, new DateTimeZone('Europe/Tallinn'));
$fields = array(
        "VK_SERVICE"     => "1011",
        "VK_VERSION"     => "008",
        "VK_SND_ID"      => "uid528759230175",
        "VK_STAMP"       => "01005037869975856230",
        "VK_AMOUNT"      => "12",
        "VK_CURR"        => "EUR",
        "VK_ACC"         => "EE785552909825143019",
        "VK_NAME"        => "ezCooking",
        "VK_REF"         => "1234567890987654321",
        "VK_MSG"         => "Annetus ezCooking meeskonnale",
        "VK_RETURN"      => 'http' . '://' . $_SERVER['HTTP_HOST'] .
                                            dirname ($_SERVER['PHP_SELF']) . '/receive', 
        "VK_CANCEL"      => 'http' . '://' . $_SERVER['HTTP_HOST'] .
                                            dirname ($_SERVER['PHP_SELF']) . '/fail',
        "VK_DATETIME"    => date_format($now, 'Y-m-d H:i:s'),
        "VK_ENCODING"    => "utf-8",
        "VK_LANG"        => "ENG"
);
$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .
        str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .
        str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .
        str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .
        str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .
        str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];
openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);
$fields["VK_MAC"] = base64_encode($signature);
?>

<div class="container" id="content1">



        <form method="post" action="http://localhost:8080/banklink/swedbank-common">
            <!-- include all values as hidden form fields -->
			<?php foreach($fields as $key => $val){
					echo '<input type="hidden" name="' .$key . ' "value="' . htmlspecialchars($val). '" />' . "\n";
				}
?>			<div class="row">
				<h2 id="annetusedpealkiri" class="alert"> Siin saad teha annetuse</h2>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<h3>Korrega saab annetada ainult 12 eurot! </h3>
					<div class="form-group">
						<!--<tr><td colspan="2"><input type="submit" class="btn btn-special" value="Annetama!" /></td></tr> -->
					 <input type="submit" class="btn btn-special" value="Annetama!" />
						
						
						<!--<button type="submit">Annetama</button> -->
						

						
					</div>
				</div>
			</div>
        </form>
</div>