$(function () {

    // Выбрана марка, получаем список годов
    $('#makes').on('change', function() {
        let make_id = $(this).val();

        resetField('years');
        resetField('models');
        resetField('engines');

        getData('#years', {
            method : 'getyears',
            make_id : make_id,
        });
    });

    // Выбран год, получаем список моделей
    $('#years').on('change', function() {
        let year_id = $(this).val();

        resetField('models');
        resetField('engines');

        getData('#models', {
            method : 'getmodels',
            year_id : year_id,
        });
    });

    // Выбрана модель, получаем список двигателей
    $('#models').on('change', function() {
        let model_id = $(this).val();

        resetField('engines');

        getData('#engines', {
            method : 'getengines',
            model_id : model_id,
        });
    });

    // Выбран двигатель
    // Включаем кнопку для просмотра результата
    $('#engines').on('change', function() {
        let engine_id = $(this).val(),
            make = $('#makes option:selected').text(),
            year = $('#years option:selected').text(),
            model = $('#models option:selected').text(),
            engine = $(this).find('option:selected').text(),
            btn = $('#show-car-result');

        $('#selected-car').html(`${make} (${year}) ${model} ${engine}`);

        console.log(`${make} (${year}) ${model} ${engine}`);

        btn.removeClass('btn-outline-secondary disabled').addClass('btn-outline-success').attr('href', '/c/' + engine_id);
    });

});

function getData(fieldId, params){
    $.post( '/getdata',
        params,
        function(data){
            let field = $(fieldId);
            if(fieldId === '#years'){
                data.sort(function(obj1, obj2){
                    return obj2.value - obj1.value;
                });
            }
            $.each(data, function(i, item){
                field.append(`<option value="${item.id}">${item.value}</option>`);
            });
            field.prop('disabled', false);
            return true;
        }
    ).fail(function(xhr){
        notices.responseError(xhr);
        return false;
    });
}

function resetField(fieldId) {
    let field = $('#'+fieldId);
    field.find('option:not(:first)').remove();
    field.find('option:first').prop('selected', true);
    field.prop('disabled', true);
}

