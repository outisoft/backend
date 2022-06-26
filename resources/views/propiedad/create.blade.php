@extends('diseño.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-3">
        <form method="POST" action="{{ route('propiedad.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
            <h6 class="mb-4">Agregar una propiedad</h6>
            <div class="form-floating mb-3">
                <input name="name" type="text" class="form-control" id="name"
                    placeholder="Juan Perez">
                <label for="floatingInput">Name of property</label>
            </div>
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control" placeholder="Leave a comment here"
                    id="description" style="height: 150px;"></textarea>
                <label for="floatingTextarea">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input name="price" type="text" class="form-control" id="price"
                    placeholder="$10,000">
                <label for="floatingInput">Price</label>
            </div>
            <div class="form-floating mb-3">
                <select name="address[]" class="form-select" id="address"
                    aria-label="Floating label select example">
                    <option selected>Direccion</option>
                    @foreach($address as $id => $direccion)
                        <option value="{{ $id }}"{{ in_array($id, old('address', [])) ? ' selected' : '' }}>{{ $direccion }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Address</label>
            </div>


            <div class="form-floating mb-3">
                <select name="rooms" class="form-select" id="rooms"
                    aria-label="Floating label select example">
                    <option selected>Rooms</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Rooms</label>
            </div>
            <div class="form-floating mb-3">
                <select name="beds" class="form-select" id="beds"
                    aria-label="Floating label select example">
                    <option selected>Beds</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Beds</label>
            </div>
            <div class="form-floating mb-3">
                <select name="baths" class="form-select" id="baths"
                    aria-label="Floating label select example">
                    <option selected>Baths</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Baths</label>
            </div>

            <div class="form-floating mb-3">
                <select name="tipos[]" class="form-select" id="tipos"
                    aria-label="Floating label select example">
                    <option selected>Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $id }}"{{ in_array($id, old('tipos', [])) ? ' selected' : '' }}>{{ $tipo->name }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Tipo</label>
            </div>
            <div class="form-group">
                <label for="">First image</label>
                <input id="img1" type="file" name="img1" class="form-control">
                <span class="text-danger error-text product_image_error"></span>
            </div>
            <div class="img-holder"></div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>


@endsection
<script>
    $(function(){
        $('#form').on('submit', function(e){
            e.preventDefault();
            var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data.code == 0){
                        $.each(data.error, function(prefix,val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $(form)[0].reset();
                        // alert(data.msg);
                        fetchAllProducts();
                    }
                }
            });
        });
        //Reset input file
        $('input[type="file"][name="img1"]').val('');
        //Image preview
        $('input[type="file"][name="img1"]').on('change', function(){
            var img_path = $(this)[0].value;
            var img_holder = $('.img-holder');
            var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
            if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:100px;margin-bottom:10px;'}).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(img_holder).html('This browser does not support FileReader');
                    }
            }else{
                $(img_holder).empty();
            }
        });

    })
</script>