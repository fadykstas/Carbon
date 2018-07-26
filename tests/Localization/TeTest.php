<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class TeTest extends LocalizationTestCase
{
    const LOCALE = 'te'; // Telugu

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'రేపు రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'శనివారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ఆదివారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'సోమవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'మంగళవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'బుధవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'గురువారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'శుక్రవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'మంగళవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'బుధవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'గురువారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'శుక్రవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'శనివారం, రాత్రి 12:00',
        // Carbon::now()->subDays(2)->calendar()
        'గత ఆదివారం,  రాత్రి 8:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'నిన్న  రాత్రి 10:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'నేడు మధ్యాహ్నం 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'నేడు రాత్రి 2:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'రేపు రాత్రి 1:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'మంగళవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'నిన్న రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'నిన్న రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'గత మంగళవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'గత సోమవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'గత ఆదివారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'గత శనివారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'గత శుక్రవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'గత గురువారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'గత బుధవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'గత శుక్రవారం, రాత్రి 12:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        ':1వ :1వ :1వ :1వ :1వ',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        ':2వ :1వ',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        ':3వ :1వ',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        ':4వ :1వ',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        ':5వ :1వ',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        ':6వ :1వ',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        ':7వ :2వ',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        ':11వ :2వ',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        ':40వ',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        ':41వ',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        ':100వ',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 రాత్రి cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 రాత్రి, 12:00 రాత్రి',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 రాత్రి, 1:30 రాత్రి',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 రాత్రి, 2:00 రాత్రి',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 ఉదయం, 6:00 ఉదయం',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 మధ్యాహ్నం, 10:00 మధ్యాహ్నం',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 మధ్యాహ్నం, 12:00 మధ్యాహ్నం',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 సాయంత్రం, 5:00 సాయంత్రం',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30  రాత్రి, 9:30  రాత్రి',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00  రాత్రి, 11:00  రాత్రి',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        ':0వ',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'కొన్ని క్షణాలు క్రితం',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        's క్రితం',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 సెకన్లు క్రితం',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        's క్రితం',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'ఒక నిమిషం క్రితం',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'min క్రితం',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 నిమిషాలు క్రితం',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'min క్రితం',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ఒక గంట క్రితం',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'h క్రితం',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 గంటలు క్రితం',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'h క్రితం',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ఒక రోజు క్రితం',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'd క్రితం',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 రోజులు క్రితం',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'd క్రితం',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'ఒక వారం క్రితం',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'w క్రితం',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 వారాలు క్రితం',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'w క్రితం',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ఒక నెల క్రితం',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'm క్రితం',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 నెలలు క్రితం',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'm క్రితం',
        // Carbon::now()->subYears(1)->diffForHumans()
        'ఒక సంవత్సరం క్రితం',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'y క్రితం',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 సంవత్సరాలు క్రితం',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'y క్రితం',
        // Carbon::now()->addSecond()->diffForHumans()
        'కొన్ని క్షణాలు లో',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        's లో',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'కొన్ని క్షణాలు',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 సెకన్లు',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        's లో',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'ఒక నిమిషం కొన్ని క్షణాలు',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        '3 సంవత్సరాలు లో',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'm క్రితం',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'y m d s క్రితం',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'ఒక వారం 10 గంటలు',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'ఒక వారం 6 రోజులు',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'ఒక వారం 6 రోజులు',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 వారాలు ఒక గంట',
        // CarbonInterval::days(2)->forHumans()
        '2 రోజులు',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        'ఒక రోజు 3 గంటలు',
    ];
}
