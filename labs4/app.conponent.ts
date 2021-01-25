import { Component } from'@angular/core';

@Component({
	selector:'app-root',
	templateUrl: './app.component.html',
	styleUrls: ['./app.component.css']
})
export class AppComponent {
	title = 'lab4';
		//bài 1
	fullname = "Phan Thanh Thoảng";
	birthday = "06/05/1997";
	gender = "name";
	photo = "thoang.jpg"
	mark="5.0";

	// bài 2
	student={
		fullname: "Phan Thanh Thoảng",
		birthday: "06/05/1997",
		gender: "Nam",
		photo: "thoang.jpg",
		mark:5.0
	}
	// Bài 3
	student1=[
		{
			fullname: "Phan Thanh T",
			birthday: "06/05/1997",
			gender: "Nam",
			photo: "thoang.jpg",
			mark:6.0
		}
		{
			fullname: "Phan Thanh Th",
			birthday: "06/05/1997",
			gender: "Nữ",
			photo: "thoang.jpg",
			mark:7.0
		}
		{
			fullname: "Phan Thanh Tho",
			birthday: "06/05/1997",
			gender: "Nam",
			photo: "thoang.jpg",
			mark:8.0
		}
	];
	// bài 4
	hosinh = {
		hoten : '',
		ngaysinh : "",
		diem : '',
		hocluc : ''
	}
	// tính toán
	onSubmit(e){
		var dai = parseFloat(e.value.chieudai);
		var rong = parseFloat(e.value.chieurong);
		var chuvi = e.value.chuvi;
		var S = e.value.dientich;
		chuvi = ( dai + rong )*2;
		S = dai * rong;
		this.dodai.chuvi = chuvi;
		this.dodai.dientich = S;
	}
	// Bài 5
	dodai = {
		chieudai : "",
		chieurong : "",
		dientich : "",
		chuvi : ""
	};
	xeploai(e){
		var diem = parseFloat(e.value.diem);
		if (diem<11&&diem>-1) {
			if (diem<5) this.hocsinh.hocluc = "Rớt";
			else this.hocsinh.hocluc = "Đậu";
		}
		else{
			this.hocsinh.hocluc = "Điểm cao quá xét không được";
		}
	}
}
