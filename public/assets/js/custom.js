function _nnotify(m,t,timer=8000){

    //notify pop up functionality options to make any changes in pop up design or other fun
//    $.notifyDefaults({
//      // settings
//      allow_dismiss: true,
//      newest_on_top: false,
//      placement: {
//        from: "top",
//        align: "right"
//      },
//      offset: 20,
//      spacing: 10,
//      z_index: 999999,
//      delay: timer,
//      animate: {
//        enter: 'animated fadeInUp',
//        exit: 'animated fadeInDown'
//      },
//      icon_type: 'class',
//      template: '<div data-notify="container" class="custom-alert alert alert-{0}" role="alert">' +
//      '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
//      '<span data-notify="icon"></span> ' +
//      '<span data-notify="title">{1}</span> ' +
//      '<span data-notify="message">{2}</span>' +
//      '<div class="progress" data-notify="progressbar">' +
//      '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
//      '</div>' +
//      '<a href="{3}" target="{4}" data-notify="url"></a>' +
//      '</div>' 
//    });
   
     //when pop up should not close untill user click on popup to close or refreshes the page
     $.notify({
		
       title: '<strong></strong>',
       message: m
     },{
       type: t,
       element: 'body',
	position: null,
	allow_dismiss: true,
	newest_on_top: false,
	showProgressbar: false,
	placement: {
		from: "top",
		align: "right"
	},
	offset: 20,
	spacing: 10,
	z_index: 1031,
	delay: 50000,
	timer: 100000,
	url_target: '_blank',
	mouse_over: null,
	animate: {
		enter: 'animated fadeInDown',
		exit: 'animated fadeOutUp'
	},
	onShow: null,
	onShown: null,
	onClose: null,
	onClosed: null,
	icon_type: 'class',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="icon"></span> ' +
		'<span data-notify="title">{1}</span> ' +
		'<span data-notify="message">{2}</span>' +
		'<div class="progress" data-notify="progressbar">' +
			'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
		'</div>' +
		'<a href="{3}" target="{4}" data-notify="url"></a>' +
	'</div>' 
     });
   
 
   
   
 
 }
 
 
 
 
   if(_notify != null){
     // _notify = JSON.parse(_notify);
     for (var i = _notify.length - 1; i >= 0; i--) {
       _nnotify(_notify[i].message, _notify[i].type);
     }
   }