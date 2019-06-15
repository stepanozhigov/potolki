<?php

namespace App\Http\Controllers;

use App\ProductsPropertiesValues;
use Illuminate\Http\Request;
use App\Photo;

/**
 * Контроллер для работы с Ajax запросами
 *
 * @package App\Http\Controllers
 */
class ProductsPropertiesValuesController extends Controller
{
    public static $propsValues = [
        [
            'property_id' => '1',
            'name'        => 'Площадь помещения: До 20 кв.м.',
            'code'        => 'room_area_20',
            'value'       => 'До 20 кв.м.'
        ],
        [
            'property_id' => '1',
            'name'        => 'Площадь помещения: От 21 кв.м. до 25 кв.м.',
            'code'        => 'room_area_21_25',
            'value'       => 'От 21 кв.м. до 25 кв.м.'
        ],
        [
            'property_id' => '1',
            'name'        => 'Площадь помещения: От 26 кв.м. до 30 кв.м.',
            'code'        => 'room_area_26_30',
            'value'       => 'От 26 кв.м. до 30 кв.м.'
        ],
        [
            'property_id' => '1',
            'name'        => 'Площадь помещения: От 31 кв.м. до 40 кв.м.',
            'code'        => 'room_area_31_40',
            'value'       => 'От 31 кв.м. до 40 кв.м..'
        ],


        [
            'property_id' => '2',
            'name'        => 'Модель: 7',
            'code'        => 'model_7',
            'value'       => '7'
        ],
        [
            'property_id' => '2',
            'name'        => 'Модель: 8',
            'code'        => 'model_8',
            'value'       => '8'
        ],
        [
            'property_id' => '2',
            'name'        => 'Модель: 12',
            'code'        => 'model_12',
            'value'       => '12'
        ],
        [
            'property_id' => '2',
            'name'        => 'Модель: 18',
            'code'        => 'model_18',
            'value'       => '18'
        ],
        [
            'property_id' => '2',
            'name'        => 'Модель: 24',
            'code'        => 'model_24',
            'value'       => '24'
        ],


        [
            'property_id' => '5',
            'name'        => 'Инверторная технология: Да',
            'code'        => 'inventornaya_tehnologia_da',
            'value'       => 'Да'
        ],
        [
            'property_id' => '5',
            'name'        => 'Инверторная технология: Нет',
            'code'        => 'inventornaya_tehnologia_net',
            'value'       => 'Нет'
        ],


        [
            'property_id' => '6',
            'name'        => 'Режим нагрева: Да',
            'code'        => 'rezim_nagreva_da',
            'value'       => 'Да'
        ],
        [
            'property_id' => '6',
            'name'        => 'Режим нагрева: Нет',
            'code'        => 'rezim_nagreva_net',
            'value'       => 'Нет'
        ],


        [
            'property_id' => '7',
            'name'        => 'Мощность охлождения: небольшая (до 2,5 КВт)',
            'code'        => 'mosnost_ohlazdenia_25',
            'value'       => 'небольшая (до 2,5 КВт)'
        ],
        [
            'property_id' => '7',
            'name'        => 'Мощность охлождения: средняя (от 2,5 КВт до 3,5 КВт)',
            'code'        => 'mosnost_ohlazdenia_25_35',
            'value'       => 'средняя (от 2,5 КВт до 3,5 КВт)'
        ],
        [
            'property_id' => '7',
            'name'        => 'Мощность охлождения: большая (от 3,5 КВт до 4,5 КВт)',
            'code'        => 'mosnost_ohlazdenia_35_45',
            'value'       => 'большая (от 3,5 КВт до 4,5 КВт)'
        ],
        [
            'property_id' => '7',
            'name'        => 'Мощность охлождения: максимальная (более 4,5 КВт)',
            'code'        => 'mosnost_ohlazdenia_45',
            'value'       => 'максимальная (более 4,5 КВт)'
        ],


        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Конконг',
            'code'        => 'strana_proizvoditel_kong',
            'value'       => 'Конконг'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Китай',
            'code'        => 'strana_proizvoditel_china',
            'value'       => 'Китай'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Корея',
            'code'        => 'strana_proizvoditel_korea',
            'value'       => 'Корея'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Малайзия',
            'code'        => 'strana_proizvoditel_malaysia',
            'value'       => 'Малайзия'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Тайланд',
            'code'        => 'strana_proizvoditel_thailand',
            'value'       => 'Тайланд'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Турция',
            'code'        => 'strana_proizvoditel_turkey',
            'value'       => 'Турция'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Франция',
            'code'        => 'strana_proizvoditel_france',
            'value'       => 'Франция'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Чехия',
            'code'        => 'strana_proizvoditel_czech',
            'value'       => 'Чехия'
        ],
        [
            'property_id' => '8',
            'name'        => 'Страна производитель: Япония',
            'code'        => 'strana_proizvoditel_japan',
            'value'       => 'Япония'
        ],


        [
            'property_id' => '9',
            'name'        => 'Класс энергосбережения: A - максимальная энергоэффективность',
            'code'        => 'energoeffectivnost_a',
            'value'       => 'A - максимальная энергоэффективность'
        ],
        [
            'property_id' => '9',
            'name'        => 'Класс энергосбережения: B - высокая энергоэффективность',
            'code'        => 'energoeffectivnost_b',
            'value'       => 'B - высокая энергоэффективность'
        ],
        [
            'property_id' => '9',
            'name'        => 'Класс энергосбережения: C - приемлемая энергоэффективность',
            'code'        => 'energoeffectivnost_c',
            'value'       => 'C - приемлемая энергоэффективность'
        ],
        [
            'property_id' => '9',
            'name'        => 'Класс энергосбережения: D - низкая энергоэффективность',
            'code'        => 'energoeffectivnost_d',
            'value'       => 'D - низкая энергоэффективность'
        ],


        [
            'property_id' => '10',
            'name'        => 'Режим работы: Автоматический режим',
            'code'        => 'rezim_raboti_automatic_mode',
            'value'       => 'Автоматический режим'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Вентиляция',
            'code'        => 'rezim_raboti_ventilation',
            'value'       => 'Вентиляция'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Ионизация',
            'code'        => 'rezim_raboti_ionization',
            'value'       => 'Ионизация'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Ночной режим',
            'code'        => 'rezim_raboti_night_mode',
            'value'       => 'Ночной режим'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Обогрев',
            'code'        => 'rezim_raboti_heating',
            'value'       => 'Обогрев'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Осушение',
            'code'        => 'rezim_raboti_dehumidification',
            'value'       => 'Осушение'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Охлаждение',
            'code'        => 'rezim_raboti_cooling',
            'value'       => 'Охлаждение'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Приточная вентиляция',
            'code'        => 'rezim_raboti_forced_ventilation',
            'value'       => 'Приточная вентиляция'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Режим очистки воздуха',
            'code'        => 'rezim_raboti_air_purification_mode',
            'value'       => 'Режим очистки воздуха'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Самодиагностика неисправностей',
            'code'        => 'rezim_raboti_self_diagnosis_mode',
            'value'       => 'Самодиагностика неисправностей'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Таймер',
            'code'        => 'rezim_raboti_timer',
            'value'       => 'Таймер'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Тихий режим',
            'code'        => 'rezim_raboti_quiet_mode',
            'value'       => 'Тихий режим'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Турбо режим',
            'code'        => 'rezim_raboti_turbo_mode',
            'value'       => 'Турбо режим'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Фильтрация',
            'code'        => 'rezim_raboti_filtering',
            'value'       => 'Фильтрация'
        ],
        [
            'property_id' => '10',
            'name'        => 'Режим работы: Функция "Теплый пуск"',
            'code'        => 'rezim_raboti_warm_start_function',
            'value'       => 'Функция "Теплый пуск"'
        ],


        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: 2 регулировки',
            'code'        => 'regulirivka_vozdusnogo_potoka_2',
            'value'       => '2 регулировки'
        ],
        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: ',
            'code'        => 'regulirivka_vozdusnogo_potoka_3',
            'value'       => '3 регулировки'
        ],
        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: 4 регулировки',
            'code'        => 'regulirivka_vozdusnogo_potoka_4',
            'value'       => '4 регулировки'
        ],
        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: 5 регулировки',
            'code'        => 'regulirivka_vozdusnogo_potoka_5',
            'value'       => '5 регулировки'
        ],
        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: 6 регулировки',
            'code'        => 'regulirivka_vozdusnogo_potoka_6',
            'value'       => '6 регулировки'
        ],
        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: 7 регулировки',
            'code'        => 'regulirivka_vozdusnogo_potoka_7',
            'value'       => '7 регулировки'
        ],
        [
            'property_id' => '11',
            'name'        => 'Регулировка воздушного потока: 8 регулировки',
            'code'        => 'regulirivka_vozdusnogo_potoka_8',
            'value'       => '8 регулировки'
        ],


        [
            'property_id' => '13',
            'name'        => 'Цвет внутреннего блока: бежевый',
            'code'        => 'cvet_vnetrennego_bloka_beige',
            'value'       => 'бежевый'
        ],
        [
            'property_id' => '13',
            'name'        => 'Цвет внутреннего блока: белый',
            'code'        => 'cvet_vnetrennego_bloka_white',
            'value'       => 'белый'
        ],
        [
            'property_id' => '13',
            'name'        => 'Цвет внутреннего блока: белый/черный',
            'code'        => 'cvet_vnetrennego_bloka_white_black',
            'value'       => 'белый/черный'
        ],
        [
            'property_id' => '13',
            'name'        => 'Цвет внутреннего блока: серый',
            'code'        => 'cvet_vnetrennego_bloka_gray',
            'value'       => 'серый'
        ],
        [
            'property_id' => '13',
            'name'        => 'Цвет внутреннего блока: черный',
            'code'        => 'cvet_vnetrennego_bloka_black',
            'value'       => 'черный'
        ],
        [
            'property_id' => '13',
            'name'        => 'Цвет внутреннего блока: черный/зеркальный',
            'code'        => 'cvet_vnetrennego_bloka_black_mirror',
            'value'       => 'черный/зеркальный'
        ],


        [
            'property_id' => '14',
            'name'        => 'Скидки и акции: подарок за покупку',
            'code'        => 'skidki_akcii_gift_for_purchase',
            'value'       => 'подарок за покупку'
        ],
        [
            'property_id' => '14',
            'name'        => 'Скидки и акции: скидки',
            'code'        => 'skidki_akcii_discounts',
            'value'       => 'скидки'
        ],
        [
            'property_id' => '14',
            'name'        => 'Скидки и акции: хит продаж',
            'code'        => 'skidki_akcii_bestseller',
            'value'       => 'хит продаж'
        ],


        [
            'property_id' => '17',
            'name'        => 'Вид хладогента: R 12',
            'code'        => 'vid_hladogenta_r12',
            'value'       => 'R 12'
        ],
        [
            'property_id' => '17',
            'name'        => 'Вид хладогента: R 22',
            'code'        => 'vid_hladogenta_r22',
            'value'       => 'R 22'
        ],
        [
            'property_id' => '17',
            'name'        => 'Вид хладогента: R 32',
            'code'        => 'vid_hladogenta_r32',
            'value'       => 'R 32'
        ],
        [
            'property_id' => '17',
            'name'        => 'Вид хладогента: R 410A',
            'code'        => 'vid_hladogenta_r410a',
            'value'       => 'R 410A'
        ],


        [
            'property_id' => '18',
            'name'        => 'Уровень шума (внутренний блок): 25-30 дБ',
            'code'        => 'uroven_shuma_vnutrenniy_blok_25_30',
            'value'       => '25-30 дБ'
        ],
        [
            'property_id' => '18',
            'name'        => 'Уровень шума (внутренний блок): 35-45 дБ',
            'code'        => 'uroven_shuma_vnutrenniy_blok_35_45',
            'value'       => '35-45 дБ'
        ],
        [
            'property_id' => '18',
            'name'        => 'Уровень шума (внутренний блок): 50-70 дБ',
            'code'        => 'uroven_shuma_vnutrenniy_blok_50_70',
            'value'       => '50-70 дБ'
        ],


        [
            'property_id' => '19',
            'name'        => 'Уровень шума (внешний блок): 25-30 дБ',
            'code'        => 'uroven_shuma_vneshniy_blok_blok_25_30',
            'value'       => '25-30 дБ'
        ],
        [
            'property_id' => '19',
            'name'        => 'Уровень шума (внешний блок): 35-45 дБ',
            'code'        => 'uroven_shuma_vneshniy_blok_blok_35_45',
            'value'       => '35-45 дБ'
        ],
        [
            'property_id' => '19',
            'name'        => 'Уровень шума (внешний блок): 50-70 дБ',
            'code'        => 'uroven_shuma_vneshniy_blok_blok_50_70',
            'value'       => '50-70 дБ'
        ],


        [
            'property_id' => '15',
            'name'        => 'Производитель: Aeronik',
            'code'        => 'proizvoditel_aeronik',
            'value'       => 'Aeronik'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Airwell',
            'code'        => 'proizvoditel_airwell',
            'value'       => 'Airwell'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Ballu',
            'code'        => 'proizvoditel_ballu',
            'value'       => 'Ballu'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Dahatsu',
            'code'        => 'proizvoditel_dahatsu',
            'value'       => 'Dahatsu'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Daikin',
            'code'        => 'proizvoditel_daikin',
            'value'       => 'Daikin'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Denko',
            'code'        => 'proizvoditel_denko',
            'value'       => 'Denko'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Electrolux',
            'code'        => 'proizvoditel_electrolux',
            'value'       => 'Electrolux'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Galanz',
            'code'        => 'proizvoditel_galanz',
            'value'       => 'Galanz'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Gree',
            'code'        => 'proizvoditel_gree',
            'value'       => 'Gree'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Green',
            'code'        => 'proizvoditel_green',
            'value'       => 'Green'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Haier',
            'code'        => 'proizvoditel_haier',
            'value'       => 'Haier'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Hisense',
            'code'        => 'proizvoditel_hisense',
            'value'       => 'Hisense'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Hitachi',
            'code'        => 'proizvoditel_hitachi',
            'value'       => 'Hitachi'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Kantatsu',
            'code'        => 'proizvoditel_kantatsu',
            'value'       => 'Kantatsu'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Klarwind',
            'code'        => 'proizvoditel_klarwind',
            'value'       => 'Klarwind'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Leberg',
            'code'        => 'proizvoditel_leberg',
            'value'       => 'Leberg'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Lessar',
            'code'        => 'proizvoditel_lessar',
            'value'       => 'Lessar'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: LG',
            'code'        => 'proizvoditel_lg',
            'value'       => 'LG'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Midea',
            'code'        => 'proizvoditel_midea',
            'value'       => 'Midea'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Optima',
            'code'        => 'proizvoditel_optima',
            'value'       => 'Optima'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Panasonic',
            'code'        => 'proizvoditel_panasonic',
            'value'       => 'Panasonic'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Renova',
            'code'        => 'proizvoditel_renova',
            'value'       => 'Renova'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Rovex',
            'code'        => 'proizvoditel_rovex',
            'value'       => 'Rovex'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Samsung',
            'code'        => 'proizvoditel_samsung',
            'value'       => 'Samsung'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Sonic',
            'code'        => 'proizvoditel_sonic',
            'value'       => 'Sonic'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Toshiba',
            'code'        => 'proizvoditel_toshiba',
            'value'       => 'Toshiba'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Tosot',
            'code'        => 'proizvoditel_tosot',
            'value'       => 'Tosot'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: Willmark',
            'code'        => 'proizvoditel_willmark',
            'value'       => 'Willmark'
        ],
        [
            'property_id' => '15',
            'name'        => 'Производитель: General Climate GCP-09ERA1N1',
            'code'        => 'proizvoditel_general_climate',
            'value'       => 'General Climate GCP-09ERA1N1'
        ],


        [
            'property_id' => '12',
            'name'        => 'Особенности: 3D воздушный поток',
            'code'        => 'osobennosti_3d_airflow',
            'value'       => '3D воздушный поток'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Air Flow Surround control',
            'code'        => 'osobennosti_air_flow_surround_control',
            'value'       => 'Air Flow Surround control'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: LED подсветка',
            'code'        => 'osobennosti_led_lights',
            'value'       => 'LED подсветка'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Mirage дисплей',
            'code'        => 'osobennosti_mirage_display',
            'value'       => 'Mirage дисплей'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Soft Dry',
            'code'        => 'osobennosti_soft_dry',
            'value'       => 'Soft Dry'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Wi-Fi',
            'code'        => 'osobennosti_wi_fi',
            'value'       => 'Wi-Fi'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Автоколебание жалюзи',
            'code'        => 'osobennosti_auto_oscillation_blinds',
            'value'       => 'Автоколебание жалюзи'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Автоматическая разморозка',
            'code'        => 'osobennosti_automatic_defrost',
            'value'       => 'Автоматическая разморозка'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Автоматический pежим сна',
            'code'        => 'osobennosti_sleep_auto',
            'value'       => 'Автоматический pежим сна'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Автоперезапуск',
            'code'        => 'osobennosti_auto_restart',
            'value'       => 'Автоперезапуск'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Автоподдержка температуры',
            'code'        => 'osobennosti_auto_temperature_support',
            'value'       => 'Автоподдержка температуры'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Авторестарт',
            'code'        => 'osobennosti_autorestart',
            'value'       => 'Авторестарт'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Антикор. Blue Fin',
            'code'        => 'osobennosti_antikor_blue_fin',
            'value'       => 'Антикор. Blue Fin'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Антикор. Gold Fin',
            'code'        => 'osobennosti_antikor_gold_fin',
            'value'       => 'Антикор. Gold Fin'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Антикоррозионное покpытие',
            'code'        => 'osobennosti_anticorrosive_coating',
            'value'       => 'Антикоррозионное покpытие'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Бесшумная работа',
            'code'        => 'osobennosti_silent_operation',
            'value'       => 'Бесшумная работа'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Датчик движения',
            'code'        => 'osobennosti_motion_sensor',
            'value'       => 'Датчик движения'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Дисплей',
            'code'        => 'osobennosti_display',
            'value'       => 'Дисплей'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Запоминание настроек',
            'code'        => 'osobennosti_memorization_settings',
            'value'       => 'Запоминание настроек'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Защита от низких температур',
            'code'        => 'osobennosti_low_temperature_protection',
            'value'       => 'Защита от низких температур'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Защита по току',
            'code'        => 'osobennosti_current_protection',
            'value'       => 'Защита по току'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Изменяемое статическое давление',
            'code'        => 'osobennosti_variable_static_pressure',
            'value'       => 'Изменяемое статическое давление'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Интенсивный режим TURBO',
            'code'        => 'osobennosti_turbo_tntensive_mode',
            'value'       => 'Интенсивный режим TURBO'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Контроль за фильтрами',
            'code'        => 'osobennosti_filter_control',
            'value'       => 'Контроль за фильтрами'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Контроль утечки фреона',
            'code'        => 'osobennosti_freon_leakage_control',
            'value'       => 'Контроль утечки фреона'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Корпус Temp Brop Resistan',
            'code'        => 'osobennosti_temp_brop_resistan',
            'value'       => 'Корпус Temp Brop Resistan'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: ПДУ',
            'code'        => 'osobennosti_pdu',
            'value'       => 'ПДУ'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Регулировка скорости вращения',
            'code'        => 'osobennosti_rotation_speed_adjustment',
            'value'       => 'Регулировка скорости вращения'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Режим POWER HEATING',
            'code'        => 'osobennosti_power_heating_mode',
            'value'       => 'Режим POWER HEATING'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Режим вентиляции',
            'code'        => 'osobennosti_ventilation_mode',
            'value'       => 'Режим вентиляции'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Рестарт',
            'code'        => 'osobennosti_restart',
            'value'       => 'Рестарт'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Самодиагностика',
            'code'        => 'osobennosti_self_test',
            'value'       => 'Самодиагностика'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Самоочистка',
            'code'        => 'osobennosti_self_cleaning',
            'value'       => 'Самоочистка'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Сенсор  движения',
            'code'        => 'osobennosti_motion_sensor2',
            'value'       => 'Сенсор  движения'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Система против образования льда',
            'code'        => 'osobennosti_anti_ice_system',
            'value'       => 'Система против образования льда'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Скрытый дисплей',
            'code'        => 'osobennosti_hidden_display',
            'value'       => 'Скрытый дисплей'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Супер тонкий',
            'code'        => 'osobennosti_super_thin',
            'value'       => 'Супер тонкий'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Таймер',
            'code'        => 'osobennosti_timer',
            'value'       => 'Таймер'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Теплый пуск',
            'code'        => 'osobennosti_warm_start',
            'value'       => 'Теплый пуск'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Три воздушных потока',
            'code'        => 'osobennosti_three_air_flow',
            'value'       => 'Три воздушных потока'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Управление вентилятором',
            'code'        => 'osobennosti_fan_control',
            'value'       => 'Управление вентилятором'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Управление потоками',
            'code'        => 'osobennosti_flow_control',
            'value'       => 'Управление потоками'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Управляемый подмес свежег',
            'code'        => 'osobennosti_controlled_podmes_fresh',
            'value'       => 'Управляемый подмес свежег'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция "Follow me"',
            'code'        => 'osobennosti_follow_me_func',
            'value'       => 'Функция "Follow me"'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция "I Feel"',
            'code'        => 'osobennosti_i_feel_func',
            'value'       => 'Функция "I Feel"'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция "Jet Cool"',
            'code'        => 'osobennosti_jet_cool_func',
            'value'       => 'Функция "Jet Cool"'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция "SMART"',
            'code'        => 'osobennosti_smart_func',
            'value'       => 'Функция "SMART"'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция 2-Way Swing',
            'code'        => 'osobennosti_2way_swing_func',
            'value'       => 'Функция 2-Way Swing'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция 4-Way Swing',
            'code'        => 'osobennosti_4way_swing_func',
            'value'       => 'Функция 4-Way Swing'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Функция Dimmer',
            'code'        => 'osobennosti_dimmer_func',
            'value'       => 'Функция Dimmer'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Фунция "Smart Defrost"',
            'code'        => 'osobennosti_smart_defrost_func',
            'value'       => 'Фунция "Smart Defrost"'
        ],
        [
            'property_id' => '12',
            'name'        => 'Особенности: Фунция "Smart Eye"',
            'code'        => 'osobennosti_smart_eye_func',
            'value'       => 'Фунция "Smart Eye"'
        ]
    ];

    public function addAllValues() {
        $values = self::$propsValues;
        $result = [];

        foreach ($values as $value) {
            $ExistValue = ProductsPropertiesValues::where('value', $value['value'])
                ->where('name', $value['name'])
                ->where('code', $value['code'])->first();
            if (!$ExistValue) $result[] = ProductsPropertiesValues::create($value);
        }

        return response()->json($result);
    }
}