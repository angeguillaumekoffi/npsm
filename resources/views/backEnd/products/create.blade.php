@extends('backEnd.layouts.master')
@section('title','Add Products Page')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="{{route('product.index')}}">Produits</a> <a href="{{route('product.create')}}" class="current">Ajouter Produit</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>C'est fait! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Ajouter Produits</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label class="control-label">Selectionner la Categorie</label>
                        <div class="controls">
                            <select name="categories_id" style="width: 415px;">
                                @foreach($categories as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    <?php
                                        if($key!=0){
                                            $sub_categories=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                            if(count($sub_categories)>0){
                                                foreach ($sub_categories as $sub_category){
                                                    echo '<option value="'.$sub_category->id.'">&nbsp;&nbsp;--'.$sub_category->name.'</option>';
                                                }
                                            }
                                        }
                                    ?>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Nom</label>
                        <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                            <input type="text" name="p_name" id="p_name" class="form-control" value="{{old('p_name')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_code" class="control-label">Référence</label>
                        <div class="controls{{$errors->has('p_code')?' has-error':''}}">
                            <input type="text" name="p_code" id="p_code" class="form-control" value="{{old('p_code')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_code')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('description')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="description" id="description" rows="6" placeholder="Description du produit" style="width: 580px;">{{old('description')}}</textarea>
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="indiq" class="control-label">Indications</label>
                        <div class="controls{{$errors->has('indiq')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="indiq" id="indiq" rows="6" placeholder="Indications d'utilisation du produit" style="width: 580px;">{{old('indiq')}}</textarea>
                            <span class="text-danger">{{$errors->first('indiq')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cons_utiliz" class="control-label">Conseils</label>
                        <div class="controls{{$errors->has('cons_utiliz')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="cons_utiliz" id="cons_utiliz" rows="6" placeholder="Conseils d'utilisation du produit" style="width: 580px;">{{old('cons_utiliz')}}</textarea>
                            <span class="text-danger">{{$errors->first('cons_utiliz')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="compo" class="control-label">Composition</label>
                        <div class="controls{{$errors->has('compo')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="compo" id="compo" rows="6" placeholder="Composition du produit" style="width: 580px;">{{old('compo')}}</textarea>
                            <span class="text-danger">{{$errors->first('compo')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Ajouter ce Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection
