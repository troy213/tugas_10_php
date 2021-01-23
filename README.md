# Tugas 10 PHP

Buatlah deret bilangan dalam array secara acak lalu lakukanlah sorting, sehingga akan tampil seperti gambar berikut ini :

![img](https://lh4.googleusercontent.com/uOGlh14gMqYsg1rHJ_w4LPg9xCPVXogvsAgOfGGvuhakVOwrxZ3Gm4jJthteEhegiWhVrNyhldtyughHQJkUSRJqAUiaRWXwi25AejC76lV9ox2G-ycVvnWFZ3FKHql73lztMUSl)

Kode :
```
<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr) {
        //Tulias Kode Kamu disini
}
?>
```

#### Note :

- Gunakan perulangan for atau while.
- Jumlah perulangan sesuai dengan jumlah isi array.
