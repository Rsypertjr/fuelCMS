 <script type="text/javascript">
  	$(document).ready(function()
				{
						 var title = "<?php echo $pageTitle; ?>";
						 $(document).prop('title', title);
				});
 </script>


<div id="outframe" style="position:relative;height:100%">
    <div id="showPDFDiv"  style="position:relative;height:100%">
    	  <object data="<?php echo $pdfFilePath; ?>" type="application/pdf" width="100%" height="100%">
    			alt: <a href="<?php echo $pdfFilePath; ?>">"<?php echo $pdfFileName;?>"</a>
          </object>
    </div>
</div>
