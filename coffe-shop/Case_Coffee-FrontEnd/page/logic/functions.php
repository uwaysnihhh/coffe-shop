<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "coffee_list" );
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query) ;

    // menyediakan wadahnya
    $rows =[];

    // yg akan di ambil setiap data
    while ( $row = mysqli_fetch_assoc($result)) {

    // menambahkan elemen baru setiap array
        $rows[] = $row;
    }

    //mengembalikan data, rows bentuknya sudah array assosiatif
    return $rows;
}
?>