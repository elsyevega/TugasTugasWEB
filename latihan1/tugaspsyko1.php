<?php
	echo "Buatlah program php untuk menyelesaikan tes pysko berikut ini : <BR>";
	echo "<BR>";

	echo "a. 4 6 9 13 18 ? ? <BR>";
	echo "<BR>";

	$a1 = 4;
	$a2 = 6;
	$a3 = 9;
	$a4 = 13;
	$a5 = 18;

	//pola penjumlahan bertingkat: +2, +3, +4, +5, +6, +7
	$a6 = $a5 + 6; //tambah selisih +6
	$a7 = $a6 + 7; //tambah selisih +7

	echo "Jawaban soal a : $a1, $a2, $a3, $a4, $a5, $a6, $a7";
	echo"<BR>";

	//soal b
	echo "<BR>";
	echo "b. 2 2 3 3 4 ? ? <BR>";

	$b1 = 2;
	$b2 = 2;
	$b3 = 3;
	$b4 = 3;
	$b5 = 4;

	//pola perulangan setiap angka dua kali
	$b6 = 4; //karena setiap angka muncul dua kali maka 4 juga muncul 2 kali
	$b7 = 5; //setelah dua kali muncul maka muncul angka selanjutnya yaitu 5

	echo "<BR>";

	echo "Jawaban soal b : $b1, $b2, $b3, $b4, $b5, $b6, $b7";
	echo "<BR>";

	//soal c
	echo "<BR>";
	echo "c. 1 9 2 10 3 ? ? <BR>";

	$c1 = 1;
	$c2 = 9;
	$c3 = 2;
	$c4 = 10;
	$c5 = 3;

	//pola bergantian angka secara berurutan dari setiap dua deret
	$c6 = 11; //angka setelah 10 dari deret kedua c4
	$c7 = 4; //angka setelah 3 dari deret pertama c5

	echo "<BR>";

	echo "Jawaban soal c : $c1, $c2, $c3, $c4, $c5, $c6, $c7";
	echo "<BR>";
?>