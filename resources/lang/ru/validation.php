<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по-умолчанию, используемые
    | классом, проверяющим значения (валидатором).Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */

    'accepted'             => 'Вы должны принять :attribute.',
    'active_url'           => 'Поле :attribute содержит недействительный URL.',
    'after'                => 'В поле :attribute должна быть дата после :date.',
    'alpha'                => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'           => 'Поле :attribute может содержать только буквы, цифры и дефис.',
    'alpha_num'            => 'Поле :attribute может содержать только буквы и цифры.',
    'array'                => 'Поле :attribute должно быть массивом.',
    'before'               => 'В поле :attribute должна быть дата до :date.',
    'between'              => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть между :min и :max.',
        'array'   => 'Количество элементов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean'              => 'Поле :attribute должно иметь значение логического типа.', // калька 'истина' или 'ложь' звучала бы слишком неестественно
    'confirmed'            => 'Поле :attribute не совпадает с подтверждением.',
    'date'                 => 'Поле :attribute не является датой.',
    'date_format'          => 'Поле :attribute не соответствует формату :format.',
    'different'            => 'Поля :attribute и :other должны различаться.',
    'digits'               => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between'       => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'email'                => 'Поле :attribute должно быть действительным электронным адресом.',
    'filled'               => 'Поле :attribute обязательно для заполнения.',
    'exists'               => 'Выбранное значение для :attribute некорректно.',
    'image'                => 'Поле :attribute должно быть изображением.',
    'in'                   => 'Выбранное значение для :attribute ошибочно.',
    'integer'              => 'Поле :attribute должно быть целым числом.',
    'ip'                   => 'Поле :attribute должно быть действительным IP-адресом.',
    'json'                 => 'Поле :attribute должно быть JSON строкой.',
    'max'                  => [
        'numeric' => 'Поле :attribute не может быть более :max.',
        'file'    => 'Размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute не может превышать :max.',
        'array'   => 'Количество элементов в поле :attribute не может превышать :max.',
    ],
    'mimes'                => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Размер файла в поле :attribute должен быть не менее :min Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть не менее :min.',
        'array'   => 'Количество элементов в поле :attribute должно быть не менее :min.',
    ],
    'not_in'               => 'Выбранное значение для :attribute ошибочно.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'regex'                => 'Поле :attribute имеет ошибочный формат.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without'     => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same'                 => 'Значение :attribute должно совпадать с :other.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'file'    => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть равным :size.',
        'array'   => 'Количество элементов в поле :attribute должно быть равным :size.',
    ],
    'string'               => 'Поле :attribute должно быть строкой.',
    'timezone'             => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique'               => 'Такое значение поля :attribute уже существует.',
    'url'                  => 'Поле :attribute имеет ошибочный формат.',

    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    | http://laravel.com/docs/5.1/validation#custom-error-messages
    | Пример использования
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Нам необходимо знать Ваш электронный адрес!',
    |       ],
    |   ],
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],

        'shop_id' => [
            'required' => 'Нужно указать магазин',
        ],

        'city_id' => [
            'required' => 'Нужно указать город',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    |
    | Пример использования
    |
    |   'attributes' => [
    |       'email' => 'электронный адрес',
    |   ],
    |
    */

    'attributes'           => [
        'active' => 'Активный',
        'actions' => 'Действия',
        'address' => 'Адрес',
        'alias' => 'Псевдоним',
        'align' => 'Выравнивание',
        'amount' => 'Количество',
        'area' => 'Область',
        'article' => 'Артикул',
        'article_original' => 'Артикул (оригинальный)',
        'm_article' => 'Артикул (менеджер)',
        'c_article' => 'Артикул (контрагент)',
        'f_article' => 'Артикул (фактический)',
        'bank_price' => 'Цена банка',
        'barcode' => 'Штрихкод',
        'birthday' => 'Дата рождения',
        'brand' => 'Производитель',
        'brand_id' => 'Производитель',
        'brand_original' => 'Производитель (оригинальный)',
        'm_brand' => 'Производитель (менеджер)',
        'c_brand' => 'Производитель (контрагент)',
        'f_brand' => 'Производитель (фактический)',
        'carrier_id' => 'Доставка по России',
        'city' => 'Город',
        'code' => 'Код',
        'codename' => 'Кодовое имя',
        'comment' => 'Комментарий',
        'company' => 'Организация',
        'company_region_id' => 'Регион компании',
        'confirmed' => 'Подтверждено',
        'country' => 'Страна',
        'c_name' => 'Название организации',
        'c_inn' => 'ИНН организации',
        'c_phone' => 'Телефон организации',
        'c_country' => 'Страна организации',
        'c_city' => 'Город организации',
        'date' => 'Дата',
        'delivery_type_id' => 'Тип доставки',
        'contact_person' => 'Контактное лицо',
        'description' => 'Описание',
        'discount' => 'Скидка',
        'discount_group_id' => 'Группа скидок',
        'email' => 'Эл.почта',
        'engine_volume' => 'Объем двигателя',
        'erp_code' => 'Код ЕРП',
        'erp_name' => 'Название ЕРП',
        'userfile' => 'Файл',
        'firstname' => 'Имя',
        'fixprice' => 'Фиксированная цена',
        'fixprice_currency_id' => 'Валюта фиксированной цены',
        'fixprice_active' => 'Фиксированная цена активна',
        'gtd' => 'Номер ГТД',
        'height' => 'Высота',
        'hit' => 'Хит',
        'kurs' => 'Курс',
        'is_open' => 'Флаг: Открыто',
        'is_active' => 'Флаг: Активно',
        'is_confirmed' => 'Флаг: Подтверждено',
        'is_published' => 'Флаг: Опубликовано',
        'lastname' => 'Фамилия',
        'l_name' => 'Фамилия',
        'length' => 'Длина',
        'list_name' => 'Название списка',
        'loc' => 'Расположение',
        'mark' => 'Марка',
        'market' => 'Маркет',
        'meta_keywords' => 'META (keywords)',
        'meta_description' => 'META (description)',
        'meta_title' => 'META (title)',
        'middlename' => 'Отчество',
        'm_name' => 'Отчество',
        'model' => 'Модель',
        'name' => 'Название',
        'new' => 'Новое',
        'for_all' => 'Для всех',
        'for_ids' => 'Для ID',
        'full_name' => 'Полное имя',
        'name_eng' => 'Английское наименование',
        'name_rus' => 'Русское наименование',
        'number' => 'Номер',
        'order_prefix' => 'Префикс заказа',
        'org_name' => 'Название организации',
        'pos' => 'Позиция',
        'passpost' => 'Паспорт',
        'password' => 'Пароль',
        'percent' => 'Процент',
        'phone' => 'Телефон',
        'phone_1' => 'Телефон 1',
        'phone_2' => 'Телефон 2',
        'postcode' => 'Почтовый индекс',
        'price' => 'Цена',
        'placement' => 'Расположение',
        'published' => 'Опубликовано',
        'reminder' => 'Памятка',
        'received_at' => 'Дата получения',
        'quantity' => 'Количество',
        'status' => 'Статус',
        'status_id' => 'Статус',
        'slug' => 'Строка-заготовка',
        'short_description' => 'Краткое описание',
        'shop' => 'Магазин',
        'title' => 'Заголовок',
        'text' => 'Текст',
        'type' => 'Тип',
        'url' => 'Ссылка',
        'value' => 'Значение',
        'vin' => 'VIN',
        'vendor' => 'Поставщик',
        'weight' => 'Вес',
        'weight_confirmed' => 'Вес подтвержден',
        'width' => 'Ширина',
        'year' => 'Год',

    ],

];