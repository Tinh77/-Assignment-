<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Tùng lợn',
                'price' => 2000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',
                'categoryId' =>'1',
                'description' => 'Tùng lợn nhưng Tùng không lợn mà là lợn'
            ],
            [
                'id' => 2,
                'name' => 'Tình lợn',
                'price' => 2000,
                'image' => 'http://image.vinanet.vn/zoom/640/Uploaded/thuthuy/2018_05_06/lonhoi_3_GGXY.jpg',
                'categoryId' =>'1',
                'description' => 'Tình lợn nhưng Tình không lợn mà là lợn'
            ],
            [
                'id' => 3,
                'name' => 'Hạnh lợn',
                'price' => 2000,
                'image' => 'http://vui.stem.vn/wp-content/uploads/2018/04/dung-noi-ngu-nhu-lon-vi-lon-rat-thong-minh.jpg',
                'categoryId' =>'1',
                'description' => 'Hạnh lợn nhưng Hạnh không lợn mà là lợn'
            ],
            [
                'id' => 4,
                'name' => 'Phương lợn',
                'price' => 2000,
                'image' => 'https://www.tuvikhoahoc.com/data/2017/10/mo-thay-lon-co-y-nghia-gi.jpg',
                'categoryId' =>'1',
                'description' => 'Phương lợn nhưng Phương không lợn mà là lợn'
            ],
            [
                'id' => 5,
                'name' => 'Sơn lợn',
                'price' => 2000,
                'image' => 'http://m-nongnghiep.vn/files/images/2017/11/20/09/27/e819edff-db4d-410a-879f-e0a563d5fcf1.Jpeg',
                'categoryId' =>'1',
                'description' => 'Sơn lợn nhưng Sơn không lợn mà là lợn'
            ],
            [
                'id' => 6,
                'name' => 'Ly lợn',
                'price' => 2000,
                'image' => 'http://cafefcdn.com/thumb_w/650/2018/5/24/photo1527158288379-1527158288380444415891.jpg',
                'categoryId' =>'1',
                'description' => 'Ngon'
            ],
            [
                'id' => 7,
                'name' => 'Apple Macbook Pro Core I7 2017',
                'price' => 2000,
                'image' => 'https://5.imimg.com/data5/EB/KA/MY-44880724/apple-macbook-pro-core-i7-2017-500x500.jpg',
                'categoryId' =>'1',
                'description' => 'Hợp thời trang'
            ],
            [
                'id' => 8,
                'name' => 'iPad',
                'price' => 2000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjxPmyPItIUYGe_Pv7ysuD91r3W4utjtjPjD4wwlQ-2sNz-0G1',
                'categoryId' =>'1',
                'description' => 'Tiện lợi'
            ],
            [
                'id' => 9,
                'name' => '2016 MacBook review',
                'price' => 2000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQJXkOmW0scvuZazt126B3h2MZrIGvdMKnS7s6uSkOEPnVixo',
                'categoryId' =>'1',
                'description' => 'Nhỏ ngọn'
            ],
            [
                'id' => 10,
                'name' => 'Apple 13" MacBook Pro',
                'price' => 2000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeTOY3PWhRXp9zkUWUEF8KSQxETo3wjyXJ1_y_NBSksfAZ-TVWqQ',
                'categoryId' =>'1',
                'description' => 'Nhỏ gọn tiện lợi hợp thời trang'
            ],
            [
                'id' => 11,
                'name' => 'Macbook',
                'price' => 2000,
                'image' => 'https://bizweb.dktcdn.net/100/176/601/products/macbook-12-inch-2017-gold-700x700-420a24d5-647e-45e1-aeca-ad31c3fcf47d.jpg?v=1506428819027',
                'categoryId' =>'1',
                'description' => 'Macbook đẹp'
            ],
            [
                'id' => 12,
                'name' => 'Tình lợn',
                'price' => 2000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',
                'categoryId' =>'1',
                'description' => 'Tình lợn nhưng Tình không lợn mà là lợn'
            ],
            [
                'id' => 13,
                'name' => 'Iphone SE2',
                'price' => 2000,
                'image' => 'https://www.iphones.ru/wp-content/uploads/2018/02/C57246BC-88A6-4C53-AEA4-7D21801A7B60.jpeg',
                'categoryId' =>'1',
                'description' => 'Đẹp'
            ],
            [
                'id' => 14,
                'name' => 'Iphone X',
                'price' => 2000,
                'image' => 'https://znews-photo-td.zadn.vn/w1024/Uploaded/OFH_oazszstq/2017_09_12/Screen_Shot_20170912_at_160833.jpg',
                'categoryId' =>'1',
                'description' => 'Đẹp và thời trang'
            ],
            [
                'id' => 15,
                'name' => 'Bánh kem thơm ngon ',
                'price' => 2000,
                'image' => 'https://daylambanh.edu.vn/images/congthuclambanh/cach-lam-banh-kem-banh-sinh-nhat.jpg',
                'categoryId' =>'1',
                'description' => 'Vị dâu'
            ],
            [
                'id' => 16,
                'name' => 'Bánh kem ngọt',
                'price' => 2000,
                'image' => 'http://goldenapple.com.vn/wp-content/uploads/2015/07/vJpVnbCNflfnwcClLAq5XfwbtJrgpf46.jpg',
                'categoryId' =>'1',
                'description' => 'Ăn ngon'
            ],
            [
                'id' => 17,
                'name' => 'Bánh kem',
                'price' => 2000,
                'image' => 'https://honghacbakeryvn.files.wordpress.com/2017/01/banh-co-kem-va-thuc-uong-co-trong-menu-tai-lamour-bakery-cafe-2.jpg',
                'categoryId' =>'1',
                'description' => 'Bánh ngon'
            ],
            [
                'id' => 18,
                'name' => 'Bánh kem sx',
                'price' => 2000,
                'image' => 'http://satbabau.vn/wp-content/uploads/2017/03/an-gi-de-sinh-con-trai-con-gai-4-1.jpg',
                'categoryId' =>'1',
                'description' => 'Ngon vô cùng'
            ],
            [
                'id' => 19,
                'name' => 'Bánh',
                'price' => 2000,
                'image' => 'https://cdn.pixabay.com/photo/2016/10/31/08/06/pastry-1785061_960_720.jpg',
                'categoryId' =>'1',
                'description' => 'Phương lợn nhưng Phương không lợn mà là lợn'
            ],
            [
                'id' => 20,
                'name' => 'Bánh trái cây',
                'price' => 2000,
                'image' => 'http://resources.cungmua.com/ftpproduct/20408/banh%20bretzel%20va%20banh%20kem%20(3).jpg',
                'categoryId' =>'1',
                'description' => 'Tươi ngon'
            ],

        ]);
    }
}
