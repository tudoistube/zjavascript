// JavaScript Document
/*...174p.라이선스 종류.
    MIT 라이선스 : 라이선스 표시만 되어 있으면 복사, 수정, 배포할 수 있고,
		              상업용으로도 사용할 수 있지만 이로 이한 결과에 대해서는
									책임지지 않음.

		BSD 라이선스 : 소스코드를 공개하지 않고도 상업적으로 사용할 수 있음.
		              작성된 프로그램은 수정할 수 있고, 수정한 것을 제한없이
									배포할 수 있음.

		GPL 라이선트 : 복사, 수정 및 배포를 할 수 있음.
		              하지만 이것을 수정한 프로그램은 GPL 라이선스에 따라야 함.
*/

jQuery.fn.bgColor = function(color){
	$(this).css("background-color",color);
	return this;
}
