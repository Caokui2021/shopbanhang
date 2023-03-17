<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    public function run()
    {
        DB::table('san_phams')->insert([
            [
                'ma_san_pham' => 'MSP1',
                'ten_san_pham' => 'Áo Xoài Degrey',
                'slug_san_pham' => 'ao-xoai-degrey',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 3500,
                'don_gia_khuyen_mai' => 2500,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao1.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao2.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao3.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP2',
                'ten_san_pham' => 'Áo Xấu Lên Bờ Bờ Lách',
                'slug_san_pham' => 'ao-xau-len-bo-bo-lach',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 2500,
                'don_gia_khuyen_mai' => 2400,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao6.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao5.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao4.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP3',
                'ten_san_pham' => 'Áo Xấu Lên Bờ Gờ Rin',
                'slug_san_pham' => 'ao-xau-len-bo-go-rin',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 2300,
                'don_gia_khuyen_mai' => 2200,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao17.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao16.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao18.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP4',
                'ten_san_pham' => 'Áo Xoài YangHo',
                'slug_san_pham' => 'ao-xoai-yangho',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 2500,
                'don_gia_khuyen_mai' => 2400,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao10.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao11.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao12.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],

            [
                'ma_san_pham' => 'MSP5',
                'ten_san_pham' => 'Nón bóng chày unisex Corduroy',
                'slug_san_pham' => 'non-bong-chay-unisex-corduroy',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 3000,
                'don_gia_khuyen_mai' => 2700,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu19.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu20.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu21.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP6',
                'ten_san_pham' => 'Áo Degrey Xoài Cảm Xúc',
                'slug_san_pham' => 'ao-degrey-xoai-cam-xuc',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 2900,
                'don_gia_khuyen_mai' => 2800,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao13.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao14.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao15.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP7',
                'ten_san_pham' => 'Áo Thun Degrey Nhiễu Đen',
                'slug_san_pham' => 'ao-thun-degrey-nhieu-den',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 2500,
                'don_gia_khuyen_mai' => 2400,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao19.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao20.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao21.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP8',
                'ten_san_pham' => 'Áo Polo Degrey Căn Bản Đen',
                'slug_san_pham' => 'ao-polo-degrey-can-ban-den',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2500,
                'don_gia_khuyen_mai' => 2300,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo1.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo2.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo3.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP9',
                'ten_san_pham' => 'Áo Polo Sọc Degrey',
                'slug_san_pham' => 'ao-polo-soc-degrey',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2700,
                'don_gia_khuyen_mai' => 2600,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo4.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo5.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo6.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP10',
                'ten_san_pham' => 'Áo Polo Thêu Oversize',
                'slug_san_pham' => 'ao-polo-theu-oversize',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2700,
                'don_gia_khuyen_mai' => 2500,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo22.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo23.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo24.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP11',
                'ten_san_pham' => 'Áo Polo Mono Degrey Trắng',
                'slug_san_pham' => 'ao-polo-mono-degrey-trang',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2700,
                'don_gia_khuyen_mai' => 2500,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo10.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo11.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo12.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP12',
                'ten_san_pham' => 'Áo Polo Mono Degrey Gờ Rin',
                'slug_san_pham' => 'ao-polo-mono-degrey-go-rin',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2600,
                'don_gia_khuyen_mai' => 2400,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo13.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo14.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo15.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP13',
                'ten_san_pham' => 'Áo Polo Degrey Căn Bản Trắng',
                'slug_san_pham' => 'ao-polo-degrey-can-ban-trang',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2700,
                'don_gia_khuyen_mai' => 2600,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo16.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo17.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo18.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP14',
                'ten_san_pham' => 'Áo Polo Nam INF Raglan',
                'slug_san_pham' => 'ao-polo-nam-inf-raglan',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 2800,
                'don_gia_khuyen_mai' => 2500,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo20.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo21.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo19.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP15',
                'ten_san_pham' => 'Balo Quốc Dân',
                'slug_san_pham' => 'balo-quoc-dan',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 2500,
                'don_gia_khuyen_mai' => 2300,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo1.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo2.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo3.jpg',
                'mo_ta_ngan' => '- Chất liệu: Canvas pha Poly
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Canvas pha Poly
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP16',
                'ten_san_pham' => 'Balo Degrey Quằng Quện',
                'slug_san_pham' => 'balo-degrey-quang-quen',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo4.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo5.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo6.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP17',
                'ten_san_pham' => 'Basic Backpack Degrey Xám',
                'slug_san_pham' => 'basic-backpack-degrey-xam',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo4.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo5.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo6.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP18',
                'ten_san_pham' => 'Degrey Galaxy Backpack',
                'slug_san_pham' => 'degrey-galaxy-backpack',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1250,
                'don_gia_khuyen_mai' => 1170,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo10.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo11.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo12.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP19',
                'ten_san_pham' => 'Balo Đám Mây Degrey',
                'slug_san_pham' => 'balo-dam-may-degrey',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo13.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo14.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo15.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP20',
                'ten_san_pham' => 'Basic Backpack Degrey',
                'slug_san_pham' => 'basic-backpack-degrey',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo16.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo17.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo18.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP21',
                'ten_san_pham' => 'Mono Degrey Backpack',
                'slug_san_pham' => 'mono-degrey-backpack',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo19.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo20.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo21.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP22',
                'ten_san_pham' => 'Converse Run Star Motion Platform',
                'slug_san_pham' => 'converse-run-star-motion-platform',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 4550,
                'don_gia_khuyen_mai' => 4270,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay1.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay3.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay2.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP23',
                'ten_san_pham' => 'Converse All Star High Lugged',
                'slug_san_pham' => 'converse-all-star-high-lugged',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 4250,
                'don_gia_khuyen_mai' => 3970,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay4.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay5.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay6.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP24',
                'ten_san_pham' => 'Nike React Pegasus Trail 4',
                'slug_san_pham' => 'nike-react-pegasus-trail-4',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 4650,
                'don_gia_khuyen_mai' => 4370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay7.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay8.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay9.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP25',
                'ten_san_pham' => 'Converse Run Star Hike Women',
                'slug_san_pham' => 'converse-run-star-hike-women',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 4850,
                'don_gia_khuyen_mai' => 4570,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay10.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay11.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay12.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP26',
                'ten_san_pham' => 'Converse Chuck Taylor All',
                'slug_san_pham' => 'converse-chuck-taylor-all',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 4050,
                'don_gia_khuyen_mai' => 3870,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay13.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay14.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay15.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP27',
                'ten_san_pham' => 'Converse All Star Ox',
                'slug_san_pham' => 'converse-all-star-ox',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 3950,
                'don_gia_khuyen_mai' => 3770,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay16.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay17.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay18.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP28',
                'ten_san_pham' => 'Converse Zebra Logo T-Shirt',
                'slug_san_pham' => 'converse-zebra-logo-t-shirt',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 3750,
                'don_gia_khuyen_mai' => 3570,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay19.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay20.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay21.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP29',
                'ten_san_pham' => 'Quần Jean Dài Basic Xanh',
                'slug_san_pham' => 'quan-jean-dai-basic-xanh',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1750,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan1.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan2.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan3.jpeg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP30',
                'ten_san_pham' => 'Quần Jean Dài Basic',
                'slug_san_pham' => 'quan-jean-dai-basic',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1750,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan4.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan5.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan6.jpeg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP31',
                'ten_san_pham' => 'Quần Short Xoài Nhí Nhố',
                'slug_san_pham' => 'quan-short-xoai-nhi-nho',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan9.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan7.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan8.jpeg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP32',
                'ten_san_pham' => 'Quần Nhung Tăm',
                'slug_san_pham' => 'quan-nhung-tam',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan16.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan17.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan18.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP33',
                'ten_san_pham' => 'Brownie Cargo Pant',
                'slug_san_pham' => 'brownie-cargo-pant',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan13.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan14.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan15.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP34',
                'ten_san_pham' => 'Cargo Pant',
                'slug_san_pham' => 'argo-pant',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan21.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan20.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan19.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP35',
                'ten_san_pham' => 'MENDE ROCK N ROLL PANT',
                'slug_san_pham' => 'mende-rock-n-roll-pant',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan22.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan23.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP36',
                'ten_san_pham' => 'Nón bóng chày unisex Cube',
                'slug_san_pham' => 'non-bong-chay-unisex-cube',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 5050,
                'don_gia_khuyen_mai' => 4370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu13.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu14.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu15.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP37',
                'ten_san_pham' => 'MŨ CHÓP PHẲNG HÚT ẨM',
                'slug_san_pham' => 'mu-chop-phang-hut-am',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 2050,
                'don_gia_khuyen_mai' => 1970,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu1.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu2.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu3.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP38',
                'ten_san_pham' => 'Mũ Dệt Kim',
                'slug_san_pham' => 'mu-det-kim',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 1850,
                'don_gia_khuyen_mai' => 1770,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu4.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu6.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu5.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP39',
                'ten_san_pham' => 'Mũ Có Thể Gấp',
                'slug_san_pham' => 'mu-co-the-gap',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu7.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu8.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu9.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP40',
                'ten_san_pham' => 'Mũ Beret',
                'slug_san_pham' => 'mu-beret',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 2250,
                'don_gia_khuyen_mai' => 2070,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu10.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu11.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu12.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP41',
                'ten_san_pham' => 'Nón bóng chày unisex Diamond',
                'slug_san_pham' => 'non-bong-chay-unisex-diamond',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 1005,
                'don_gia_khuyen_mai' => 9970,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu16.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu17.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu18.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP42',
                'ten_san_pham' => 'Áo Tiên Tri Vũ Trụ Xoài',
                'slug_san_pham' => 'ao-tien-tri-vu-tru-xoai',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 1950,
                'don_gia_khuyen_mai' => 1830,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao9.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao8.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao7.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP43',
                'ten_san_pham' => 'Nón bóng chày unisex Multi Logo',
                'slug_san_pham' => 'non-bong-chay-unisex-multi-logo',
                'is_open' => 1, 'danh_muc_id' => '5',
                'don_gia_ban' => 1305,
                'don_gia_khuyen_mai' => 1257,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu22.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu23.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Mu/mu24.jpg',
                'mo_ta_ngan' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc',
                'mo_ta_chi_tiet' => '- Kiểu dáng nón bóng chày unisex thời trang
                - Phối logo bóng chày thêu nổi bật
                - Họa tiết monogram cá tính, thời thượng
                - Webbing điều chỉnh kích thước ở phía sau
                - Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện khác
                - Xuất xứ thương hiệu: Hàn Quốc
                - MLB là tên viết tắt của Major League Baseball
                - tổ chức thể thao chuyên nghiệp của môn bóng chày.
                - Thương hiệu MLB thuộc tập đoàn F&F đã mở cửa hàng MLB Korea đầu tiên vào năm 1997'
            ],
            [
                'ma_san_pham' => 'MSP44',
                'ten_san_pham' => 'Áo Thun Gân Degrey',
                'slug_san_pham' => 'ao-thun-gan-degrey',
                'is_open' => 1, 'danh_muc_id' => '6',
                'don_gia_ban' => 1950,
                'don_gia_khuyen_mai' => 1850,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao23.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao22.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoTee/Ao24.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton
                - Họa tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP45',
                'ten_san_pham' => 'Áo Polo Mono Degrey Nâu',
                'slug_san_pham' => 'ao-polo-mono-degrey-nau',
                'is_open' => 1, 'danh_muc_id' => '7',
                'don_gia_ban' => 1150,
                'don_gia_khuyen_mai' => 1070,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo9.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo8.jpg,http://127.0.0.1:8000/storage/photos/SanPham/AoPolo/polo7.jpg',
                'mo_ta_ngan' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Cotton Cá sấu
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: S/ M/ L/ XL
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                - Không dùng hóa chất tẩy lên sản phẩm
                - Bạn nên giặt tay và LỘN NGƯỢC ÁO trước khi giặt.
                - Không ủi trực tiếp lên hình in.
                - Hạn chế sử dụng máy sấy và ủi (nếu có) chỉ nên ủi lên vải hoặc sử dụng bàn ủi hơi nước ở nhiệt độ thích hợp.'
            ],
            [
                'ma_san_pham' => 'MSP46',
                'ten_san_pham' => 'Degrey Leather Basic Balo',
                'slug_san_pham' => 'degrey-leather-basic-balo',
                'is_open' => 1, 'danh_muc_id' => '3',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1470,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo22.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo23.jpeg,http://127.0.0.1:8000/storage/photos/SanPham/Balo/Balo24.jpeg',
                'mo_ta_ngan' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
                'mo_ta_chi_tiet' => '- Chất liệu: Da
                - Hoạ tiết: Được in trực tiếp lên sản phẩm
                - Size: 40cm X 30cm X 12cm
                - Ngăn chống sốc đựng vừa laptop 15inch
                - Thương hiệu: Degrey
                - Sản xuất: Việt Nam
                - Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY
                + HƯỚNG DẪN BẢO QUẢN SẢN PHẨM DEGREY:
                - Không dùng hóa chất tẩy mạnh lên sản phẩm
                - Không dùng vật dụng sắc, nhọn cà trực tiếp lên bề mặt Balo
                - Không giặt máy
                - Sử dụng bàn chải có lông mềm
                - Tuyệt đối không dùng bàn chải cước cứng sẽ gây ra các vết xước trên nền vải'
            ],
            [
                'ma_san_pham' => 'MSP47',
                'ten_san_pham' => 'Converse All Star Oxford Junior',
                'slug_san_pham' => 'converse-all-star-oxford-junior',
                'is_open' => 1, 'danh_muc_id' => '4',
                'don_gia_ban' => 1405,
                'don_gia_khuyen_mai' => 1397,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay22.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay23.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Giay/giay24.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
            [
                'ma_san_pham' => 'MSP48',
                'ten_san_pham' => 'Quần Short Xoài Nhí Nhố',
                'slug_san_pham' => 'quan-short-xoai-nhi-nho',
                'is_open' => 1, 'danh_muc_id' => '2',
                'don_gia_ban' => 1550,
                'don_gia_khuyen_mai' => 1370,
                'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan11.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan12.jpg,http://127.0.0.1:8000/storage/photos/SanPham/Quan/quan10.jpg',
                'mo_ta_ngan' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...',
                'mo_ta_chi_tiet' => '-Thông Tin Sản Phẩm
                - Ảnh Thật và clip 100% do shop tự chụp quay nên sp 100% giống ảnh.
                - Sản Phẩm bao gồm : Giày + Hộp CV + Giấy gói+ Túi convers
                - Đế cao su tổng hợp, đi êm, da bên ngoài rất mềm không lo bong tróc, nứt gãy.
                - Giày đẹp, đường may chắc chắn bền.
                - Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...
                - Tất cả các sản phẩm đăng bán shop đều chụp hình và quay video sản phẩm để các bạn xem rõ chất liệu giày trước khi đặt mua
                - FORM giày chuẩn đẹp, ĐƯỜNG CHỈ MAY đều và chắn chắn.
                - ĐẾ GIÀY  dày dặn và chắc chắn, nặng hơn so với các giày kém chất lượng. Keo không bị lộ và lem lên vải.
                - LOGO ở gót giày nổi và in rõ nét khó bị bong phai và trôi màu khi mang.'
            ],
        ]);
    }
}
