<?php namespace App\Controllers;
class page extends BaseController
{
    public function about()
    {echo "About page";}
    public function contact()
    {echo "Contact page";}
    public function faqs()
    {echo "FAQs page";}
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "Halaman Biodata";
        echo "<br>";
        echo "Nama      : Muhammad Rizky";
        echo "<br>";
        echo "Umur      : 20 Tahun";
        echo "<br>";
        echo "Alamat    : Jl. jalan No. 1";
        echo "<br>";
        echo "No. Telp  : 0812345678";
        }
}

