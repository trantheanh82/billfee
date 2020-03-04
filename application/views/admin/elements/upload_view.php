<?php
	//init default value
	if(!isset($type_file)){
		$type_files = "image";
	}
	//hidden input form
	
echo form_hidden('type_file',$type_file);
	?>
<div class="row fileupload-buttonbar">
  <div class="col-lg-7">
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
      <i class="glyphicon glyphicon-plus"></i>
      <span>Add files...</span>
      <input type="file" name="files[]" multiple="">
    </span>
    <button type="submit" class="btn btn-primary start">
      <i class="glyphicon glyphicon-upload"></i>
      <span>Start upload</span>
    </button>
    <button type="reset" class="btn btn-warning cancel">
      <i class="glyphicon glyphicon-ban-circle"></i>
      <span>Cancel upload</span>
    </button>
    <button type="button" class="btn btn-danger delete">
      <i class="glyphicon glyphicon-trash"></i>
      <span>Delete selected</span>
    </button>
    <input type="checkbox" class="toggle">
    <!-- The global file processing state -->
    <span class="fileupload-process"></span>
  </div>
  <!-- The global progress state -->
  <div class="col-lg-5 fileupload-progress fade">
    <!-- The global progress bar -->
    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
      <div class="progress-bar progress-bar-success" style="width: 0%;"></div>
    </div>
    <!-- The extended global progress state -->
    <div class="progress-extended">&nbsp;</div>
  </div>
</div>

<table role="presentation" class="table table-striped">
    <tbody class="files"></tbody>
</table>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-upload fade">
              <td>
                  <span class="preview"></span>
              </td>
              <td>
                  {% if (window.innerWidth > 480 || !o.options.loadImageFileTypes.test(file.type)) { %}
                      <p class="name">{%=file.name%}</p>
                  {% } %}
                  <strong class="error text-danger"></strong>
              </td>
              <td>
                  <p class="size">Processing...</p>
                  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
              </td>
              <td>
                  {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
                    <button class="btn btn-success edit" data-index="{%=i%}" disabled>
                        <i class="glyphicon glyphicon-edit"></i>
                        <span>Edit</span>
                    </button>
                  {% } %}
                  {% if (!i && !o.options.autoUpload) { %}
                      <button class="btn btn-primary start" disabled>
                          <i class="glyphicon glyphicon-upload"></i>
                          <span>Start</span>
                      </button>
                  {% } %}
                  {% if (!i) { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
<!-- The template to display files available for download -->    
  <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-download fade">
              <td>
                  <span class="preview">
                      {% if (file.thumbnailUrl) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                      {% } %}
                  </span>
              </td>
              <td>
                  {% if (window.innerWidth > 480 || !file.thumbnailUrl) { %}
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>
                  {% } %}
                  {% if (file.error) { %}
                      <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                  {% } %}
              </td>
              <td>
                  <span class="size">{%=o.formatFileSize(file.size)%}</span>
              </td>
              <td>
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" name="delete" value="1" class="toggle">
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
    
<script>
	
/*jslint unparam: true, regexp: true */
/*global window, $ */
/*
 * jQuery File Upload Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */
/* global $ */

$(function() {
  'use strict';

  // Initialize the jQuery File Upload widget:
  $('#main_form_submit').fileupload({
    // Uncomment the following to send cross-domain cookies:
    //xhrFields: {withCredentials: true},
    url: '<?=$this->config->base_url().$current_lang['slug']?>/admin/upload/'
  });

  // Enable iframe cross-domain access via redirect option:
  $('#main_form_submit').fileupload(
    'option',
    'redirect',
    window.location.href.replace(/\/[^/]*$/, '/cors/result.html?%s')
  );

  if (window.location.hostname === 'blueimp.github.io' || window.location.hostname == "localhost" ) {
    // Demo settings:
    $('#main_form_submit').fileupload('option', {
      url: '<?=$this->config->base_url().$current_lang['slug']?>/admin/upload/',
      // Enable image resizing, except for Android and Opera,
      // which actually support image resizing, but fail to
      // send Blob objects via XHR requests:
      disableImageResize: /Android(?!.*Chrome)|Opera/.test(
        window.navigator.userAgent
      ),
      maxFileSize: 999000,
      acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
      singleFileUploads: true
      
      
    });
    
    //Callback functions
    
    $('#main_form_submit').on('fileuploaddone',function(e, data){
	    console.log(data);
    })
    
    // Upload server status check for browsers with CORS support:
    if ($.support.cors) {
      $.ajax({
        url: '<?=$this->config->base_url().$current_lang['slug']?>/admin/upload/',
        type: 'HEAD'
      }).fail(function() {
        $('<div class="alert alert-danger"/>')
          .text('Upload server currently unavailable - ' + new Date())
          .appendTo('#main_form_submit');
      });
    }
  } else {
    // Load existing files:
    $('#main_form_submit').addClass('fileupload-processing');
    $.ajax({
      // Uncomment the following to send cross-domain cookies:
      //xhrFields: {withCredentials: true},
	  url: $('#main_form_submit').fileupload('option', 'url'),
      dataType: 'json',
      context: $('#main_form_submit')[0]
    })
      .always(function() {
        $(this).removeClass('fileupload-processing');
      })
      .done(function(result) {
        $(this)
          .fileupload('option', 'done')
          // eslint-disable-next-line new-cap
          .call(this, $.Event('done'), { result: result });
      });
  }
});

// Delete File 
$(document).ready(function(){
	
	
	$(document).on('click','.fileupload-command-delete',function(){
		
		obj = $(this);
		
		$.ajax({
			url: $(this).attr('href')
		})
		.done(function(data){
			if(data == 'done'){
				
				obj.parent('p').parent('div.col-md-4').fadeOut('fast');
			}
		});
		return false;
	})
	
	
})
</script>