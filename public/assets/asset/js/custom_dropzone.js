	Dropzone.autoDiscover = false;
var myDropzone = new Dropzone(".dropzone", {
  init: function() {
    // console.log(imageArray)
    // if(imageArray.length){
    //  let myDropzone = this;
    //  for (const $key in imageArray) {
    //   if (imageArray.hasOwnProperty($key)) {
    //    let mockFile = { name: imageArray[$key].desc, size: (300.4*1024) };
    //    myDropzone.displayExistingFile(mockFile,imageArray[$key].src);  
    //   }
    //  }
    //  let fileCountOnServer = imageArray.length; // The number of files already uploaded
    //  myDropzone.options.maxFiles = myDropzone.options.maxFiles - fileCountOnServer;
    // //  console.log("edit");
  
    // }
   },
	parallelUploads: 5, // Number of files process at a time (default 2)
	url: `${$proof_upload}`,
	addRemoveLinks: true,
	maxFilesize: 5, // MB
	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	acceptedFiles: "image/*",
	paramName: "file", // The name that will be used to transfer the file
	maxFiles: 4,
	success: function (file, res) {
		$res = JSON.parse(res);
		$imageArray.push($res.url);

	},
	removedfile: function (file) {
    $name =  file.upload.filename;


		$.ajax({
			type: "POST",
			url: `${$proof_delete}`,
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: { image_name: $name },
			success: function ($res) {
				console.log($res)
				$image = "public/"+$name;
				for (const $key in $imageArray) {
					if ($imageArray.hasOwnProperty($key)) {
						if ($imageArray[$key] == $image) {
							$imageArray.splice($key, 1);
							break;
						}
					}
				}


			},
		});
		var _ref;
		return (_ref = file.previewElement) != null
			? _ref.parentNode.removeChild(file.previewElement)
			: void 0;
	},
	renameFile: function (file) {
		let newName = new Date().getTime() + "_" + file.name;
		return newName;
	},
});
