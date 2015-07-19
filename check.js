function getSpan(cobj){
	while(1){
		if(cobj.nextSibling.nodeName!="SPAN"){
			cobj=cobj.nextSibling;
		}
		else
			return cobj.nextSibling;
	}
}//找到span标签；

function check(obj,info,fun){
	var sp=getSpan(obj);
	var text=sp.innerHTML;
	obj.onfocus=function(){
		sp.innerHTML=info;
		sp.className="st2";
	}//得到鼠标焦点时触发事件；

	obj.onblur=function(){
		//if(obj.value.length>=6&& obj.value.length<=16){
		if(fun(this.value)){
			sp.innerHTML="输入正确";
			sp.className="st4";
		}
		else if(this.value!=""){
			sp.innerHTML=info;
			sp.className="st3";
		}
		else{
			sp.innerHTML=text;
			sp.className="st1";
		}
	}//失去鼠标焦点时触发事件；
}


onload=function(){
	var username=document.getElementsByName("username")[0];
	var password=document.getElementsByName("password")[0];
	var repeat=document.getElementsByName("repeat")[0];
	var Email=document.getElementsByName("Email")[0];

	//alert(getSpan(username).nodeName);
	check(username,"用户名长度在6-16之间",function(val){
		if(val.length>=6&&val.length<=16){
			return true;
		}else return false;
	});

	check(password,"密码长度要在6-20之间",function(val){
		if(val.length>=6&&val.length<=20){
			return true;
		}else return false;
	});

	check(repeat,"确定密码和输入的一致",function(val){
		if(val==password.value && val.length >=6 && val.length <= 20) return true;
		else return false;
	});

}//页面加载完成会执行该函数；

//表单验证 
function judge()
{
	if(document.form.username.value == ""){
		alert("用户名不能为空");
		return false;
	}
	if(document.form.password.value != "" && document.form.repeat.value != ""){
		if(document.form.password.value != document.form.repeat.value){
			alert("两次输入密码不一致");
			return false;
		}
	}else{
		alert("密码不能为空");
		return false;
	}

	return true;
}

var citys=new Array(
		new Array("南京","徐州","连云港","淮安","盐城","扬州","南通","镇江","常州","无锡","苏州","泰州","宿迁",
			"昆山","其它"),
		new Array("北京"),
		new Array("天津"),
		new Array("上海"),
		new Array("重庆"),
		new Array("广州","深圳","珠海","汕头","韶关","河源","梅州","惠州","汕尾","东莞","中山","江门",
			"佛山","阳江","湛江","茂名","肇庆","清远","潮州","揭阳","云浮","其它"),
		new Array("杭州","宁波","温州","嘉兴","绍兴","金华","衢州","舟山","台州","丽水","湖州","其它"),
		new Array("福州","厦门","三明","莆田","泉州","漳州","南平","宁德","龙岩","其它"),
		new Array("长沙","株洲","湘潭","衡阳","邵阳","岳阳","常德","张家界","娄底","永州","怀化","益阳",
			"湘西","其它"),
		new Array("武汉","黄石","襄樊","十堰","宜昌","荆州","鄂州","孝感","黄冈","咸宁","荆门","随州","天门",
			"仙桃","潜江","神农架","恩施","其它"),
		new Array("济南","青岛","淄博","枣庄","东营","潍坊","烟台","威海","济宁","泰安","日照","莱芜","德州",
			"滨州","临沂","菏泽","聊城","其它"),
		new Array("沈阳","铁岭","抚顺","大连","本溪","营口","锦州","盘锦","辽阳","鞍山","丹东","朝阳","阜新",
			"其它"),
		new Array("长春","吉林","通化","四平","辽源","白城","延边","白山","松原","其它"),
		new Array("昆明","曲靖","大理","玉溪","丽江","楚雄","迪庆","文山","昭通","保山","其它"),
		new Array("成都","宜宾","泸州","内江","攀枝花","德阳","雅安","遂宁","南充","绵阳","广元","华鉴","乐山",
			"其它"),
		new Array("合肥","芜湖","马鞍山","蚌埠","铜陵","淮北","淮南","毫州","巢湖","黄山","宿州","阜阳","六安",
			"滁州","池州","安庆","其它"),
		new Array("南昌","九江","鹰潭","宜春","新余","萍乡","赣州","吉安","抚州","上饶","其它"),
		new Array("哈尔滨","佳木斯","牡丹江","大庆","齐齐哈尔","绥化","伊春","鹤岗","七台河","双鸭山","鸡西",
			"黑河","其它"),
		new Array("石家庄","邯郸","保定","张家口","秦皇岛","邢台","唐山","廊坊","衡水","沧州","承德","其它"),
		new Array("西安","咸阳","宝鸡","铜川","渭南","延安","汉中","榆林","其它"),
		new Array("海口","三亚","琼海","儋州","其它"),
		new Array("郑州","洛阳","开封","鹤壁","焦作","许昌","驻马店","周口","新乡","安阳","濮阳","信阳","平顶山",
			"三门峡","南阳","商丘","其它"),
		new Array("太原","大同","忻州","临汾","运城","长治","阳泉","晋城","其它"),
		new Array("呼和浩特","赤峰","包头","乌兰察布","锡林浩特","通辽","其它"),
		new Array("南宁","桂林","北海","柳州","玉林","百色","河池","钦州","梧州","其它"),
		new Array("贵阳","遵义","铜仁","六盘水","安顺","其它"),
		new Array("银川","固原","吴忠","石嘴山","其它"),
		new Array("西宁","海东","海北","玉树","其它"),
		new Array("乌鲁木齐","石河子","哈密","阿克苏","昌吉","伊犁","吐鲁番","喀什","和田","其它"),
		new Array("拉萨","那曲","其它"),
		new Array("兰州","酒泉","临夏","张掖","嘉峪关","金昌","平凉","白银","武威","天水","其它"),
		new Array("台湾"),
		new Array("香港"),
		new Array("澳门"),
		new Array("海外")
	);

function selectcity(pname,cname){
	var province=["江苏省","北京","天津","上海","重庆","广东省","浙江省","福建省","湖南省","湖北省",
	"山东省","辽宁省","吉林省","云南省","四川省","安徽省","江西省","黑龙江","河北省","陕西省",
	"海南省","河南省","山西省","内蒙古","广西","贵州省","宁夏","青海省","新疆","西藏","甘肃省","台湾省",
	"香港","澳门","国外"];

	
	document.write('<select onchange="selectc(this)" name="'+pname+'">');
	document.write('<option value="">--选择省份--</option>');
	for(var i = 0; i < province.length; i ++){
		document.write('<option value="'+province[i]+'">'+province[i]+'</option>')
	}
	document.write("</select>");

	document.write('<select id="city" name="'+cname+'">');
	document.write('<option value="">--选择城市--</option>');
	document.write("</select>");
}

function selectc(pobj){
	var index=pobj.selectedIndex-1;
	var cobj=document.getElementById("city");
	cobj.innerHTML="";//每次创建OPTION对象前将内容清空；
	if(index>=0){
		for(var i = 0;i<citys[index].length; i++){
			var option=document.createElement("option");
			var text=citys[index][i];
			option.value=text;
			option.innerHTML=text;
			cobj.appendChild(option);
		}
	}
}