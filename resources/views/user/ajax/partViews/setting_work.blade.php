<div class="box box-widget mb-0" style="min-height: 600px;">

    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th"></i> Update Work Info</h3>
    </div>

    <div class="box-body ">

    	@include('alerts.alerts') 
    	   
        <div class="output-edu-work">
          @includeIf('user.settings.ajax.view.outputWorkRecord')
        </div>
 
        @include('user.settings.includes.forms.changeWorkInfoForm')

    </div>
  </div>