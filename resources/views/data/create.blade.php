@extends('layouts.main')

@section('title', 'Добавляйте нужные вам поля')

@section('content')
    <form action="{{ route('data.store', $id) }}" method="post" name="customform">
        @csrf
        <div class="row ">
            <div class="col-md-4">
                <h4>Тип поля</h4>
                @error('type')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group flex-nowrap">
                    <div class="mb-3">

                        <select name="type" id="checktype" class="form-select form-control">
                            <option value="1" selected="selected">Строка</option>
                            <option value="2">Дата</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row elblock show">
            <div class="col-md-12">
                <div class="row">

                    <h2 class="col-md-3">Размер поля и название</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" required type="radio" name="size" id="inlineRadio1" value="S">
                            <label class="form-check-label" for="inlineRadio1">S</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"  type="radio" name="size" id="inlineRadio1" value="M">
                            <label class="form-check-label" for="inlineRadio1">M</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"  type="radio" name="size" id="inlineRadio1" value="L">
                            <label class="form-check-label" for="inlineRadio1">L</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"  type="radio" name="size" id="inlineRadio1" value="XL">
                            <label class="form-check-label" for="inlineRadio1">XL</label>
                        </div>
                    </div>
                </div>


                <input type="text" name="name" required class="form-control col-md-3" value="{{ old('name') }}"
                placeholder="Название поля" />

                <div class="el_blocko_type">
                <div class="input">

                <h4 class="mt-4">Содержимое поля</h4>
                <textarea name="value" class="form-control col-sm-6"></textarea>
                    </div>
                    <div class="date" style="display: none">

                    <h4 class="mt-4">Выберите дату</h4>
                <input name="date-range" type="text" class="form-control col-md-3" value="{{ old('data_range') }}"
                    placeholder="Поддержка до:" />
                    </div>
                </div>

            </div>

        </div>

       
        <button type="submit" class="btn btn-success mt-2">Save</button>
        </div>

    </form>
@endsection

@section('js')
    <script>
        let select = document.getElementById('checktype')

        let str = document.getElementById('string')



        select.addEventListener('change', (event) => {
            let val = select.options[select.selectedIndex].value;
            
            let blocks = document.querySelectorAll('.el_blocko_type>div');
            if(val == 2){
                blocks[1].style.display = 'block'
                blocks[0].style.display = 'none'
            }else{
                blocks[1].style.display = 'none'
                blocks[0].style.display = 'block'
            }
            
            // blocks.forEach((div, index) => {
            //     div.classList.remove('show')
            //     if (val == index + 1) {
            //         div.classList.add('show')
            //     }

            // })
        })
    </script>
@endsection
