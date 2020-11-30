<?php

$months = array(
           'nil',
           'Jan.',
           'Feb.',
           'Mar.',
           'Apr.',
           'May',
           'June',
           'July',
           'Aug.',
           'Sept.',
           'Oct.',
           'Nov.',
           'Dec.',
);

$seasons = array(
            '21' => 'Spring',
            '22' => 'Summer',
            '23' => 'Autumn',
            '24' => 'Winter',
           );

$quarters = array(
             '1' => '1st_qtr.',
             '2' => '2nd_qtr.',
             '3' => '3rd_qtr.',
             '4' => '4th_qtr.',
);

// OCLC shelvingLocation => local shelving location.
$shelf_loc = array(
    'U3QA' => array(
        '- Didacthèque - Secondaire - Prêt régulier' => '',
        '- Coll. générale - Prêt régulier' => '',
    ),
    'U3QD' => array(
        '- Collection générale - Prêt régulier' => 'U3QD - GEN',
    ),
    'IQUU' => array(
        'Ask for Assistance at Service Desk' => 'ZIM',
        'Basement Books' => 'ZIM',
        'Closed Access - Government Publications' => 'ZIM<br />Gov<br />Pub<br />Closed<br />Access',
        'Closed Access - Tower' => 'ZIM',
        'Display' => 'ZIM',
        'Government CD/DVD' => 'ZIM<br />Gov<br />Pub<br />CD/DVD',
        'Government Microfiche' => 'ZIM<br />Gov<br />Pub<br />Mfiche',
        'Government Microfilm' => 'ZIM<br />Gov<br />Pub<br />Mfilm',
        'Government Oversize' => 'ZIM<br />Gov<br />Pub<br />Ovs',
        'Government Pamphlet' => 'ZIM<br />Gov<br />Pub<br />Pamphlet',
        'Government Poster' => 'ZIM<br />Gov<br />Pub<br />Poster',
        'Government Publications' => 'ZIM<br />Gov<br />Pub',
        'Herzstein Room' => 'ZIM<br />Herz-<br />stein',
        'Indigenous Nations Library Program' => 'ZIM<br />INLP',
        'International Collection' => 'ZIM<br />Inter-<br />national',
        'Microcard' => 'ZIM<br />Mcard',
        'Microfiche' => 'ZIM<br />Mfiche',
        'Microfilm' => 'ZIM<br />Mfilm',
        'Microform Guide' => 'ZIM<br />Mform<br />Guide',
        'Microprint' => 'ZIM<br />Mprint',
        'New Mexico Microfilm' => 'ZIM<br />NM<br />Mfilm',
        'Newspapers' => 'ZIM<br />News',
        'Periodicals' => 'ZIM<br />Per',
        'Periodicals Oversize' => 'ZIM<br />Per<br />Ovs',
        'Reading Collection' => 'ZIM',
        'Reference' => 'ZIM<br />Ref',
        //'Reference' => 'ZIM<br />Ref<br />Ovs.',
        //'Reference' => 'ZIM<br />Ref<br />Desk.',
        'Second Floor' => 'ZIM',
        'Second Floor - Oversize' => 'ZIM<br />Ovs.',
        'Third Floor' => 'ZIM',
        "Third Floor - Children's Literature" => 'ZIM<br />Child<br />Lit.',
        'West Wing' => 'ZIM<br />West<br />Wing',
    ),
    'IQUC' => array(
        'Anderson Reading Room - Library Use Only' => 'ZIM<br />CSWR<br />Anderson',
        'Anderson Reading Room Oversize  - Library Use Only' => 'ZIM<br />CSWR<br />Anderson<br />Ovs.',
        'Audio-Visual Collection  - Library Use Only' => 'ZIM<br />CSWR<br />A/V',
        'Audio-Visual Collection - Staff Use Only' => 'ZIM<br />CSWR<br />A/V',
        'Books - H.S. - Library Use Only' => 'ZIM<br />CSWR',
        'Books - Library Use Only' => 'ZIM<br />CSWR',
        'Centennial Archival Storage  - Staff Use Only' => 'CSEL<br />Archival<br />Storage',
        'Centennial Microfilm Negatives - Staff Use Only' => 'CSEL<br />Mfilm<br />Neg.',
        'FSTOR - Library Use Only' => 'ZIM<br />CSWR<br />FSTOR',
        'Manuscripts - H.S. - Library Use Only' => 'ZIM<br />CSWR<br />Manu-<br />scripts',
        'Manuscripts - Library Use Only' => 'ZIM<br />CSWR<br />Manu-<br />scripts',
        'Map Case - Library Use Only' => 'ZIM<br />CSWR<br />Map<br />Case',
        'Meem Archives - Library Use Only' => 'ZIM<br />CSWR<br />Meem<br />Archives',
        'Microfilm - Library Use Only' => 'ZIM<br />CSWR<br />Mfilm',
        'Oversize - H.S. - Library Use Only' => 'ZIM<br />CSWR<br />Ovs.',
        'Oversize - Library Use Only' => 'ZIM<br />CSWR<br />Ovs.',
        'Pictorial Collections - H.S. - Library Use Only' => 'ZIM<br />CSWR<br />Pict.<br />Colls.',
        'Pictorial Collections - Library Use Only' => 'ZIM<br />CSWR<br />Pict.<br />Colls.',
        'Robb Archive - Library Use Only' => 'ZIM<br />CSWR<br />Robb',
        'Theses/Dissertations - Library Use Only' => 'ZIM<br />CSWR<br />Th/Ds',
        'UNM Archives - Library Use Only' => 'ZIM<br />CSWR<br />UNM<br />Archives',
    ),
    'IQUD' => array(
        'Audio Visual' => 'UNM<br />West<br />A/V',
        'General Collection' => 'UNM<br />West<br /><br />',
        'Microfilm' => 'UNM<br />West<br />Mfilm',
        'Periodicals' => 'UNM<br />West<br />Per',
        'Reference' => 'UNM<br />West<br />Ref',
        'Reserve' => 'UNM<br />West<br />Reserve',
    ),
    'IQUF' => array(
        'Ask for Assistance at Service Desk' => 'FAL',
        'Books' => 'FAL',
        'Closed Access' => 'FAL<br />Closed<br />Access',
        'Closed Access - Periodicals' => 'FAL<br />Storage<br />Per',
        'Miniature Scores' => 'FAL<br />Min.',
        'Oversize' => 'FAL<br />Ovs.<br />',
        'Periodicals' => 'FAL<br />Per',
        'Reference' => 'FAL<br />Ref',
        'Service Desk' => 'FAL',
        'Sound Recording' => 'FAL<br />Sound<br />Recording',
        'Sound Recording - LP Collection' => 'FAL<br />Sound<br />Recording',
        'Special Collection' => 'FAL<br />XX',
        'Visual Media - DVD' => 'FAL<br />DVD',
        'Visual Media - VHS' => 'FAL<br />Video',
    ),
    'IQUP' => array(
        'Ask for Assistance at Service Desk' => 'PML',
        'Display' => 'PML<br />Display',
        'Lower Level' => 'PML',
        'Lower Level - Does Not Check Out' => 'PML',
        'Newspapers' => 'PML<br />News',
        'Reference' => 'PML<br />Ref',
        'Service Desk' => 'PML<br />Ref',
    ),
    'IQUS' => array(
        'Ask for Assistance at Service Desk' => 'CSEL',
        'Closed Access' => 'CSEL<br />Storage',
        'Government  CD/DVD' => 'CSEL<br />Gov<br />Pub<br />CD<br />Rom',
        'Government  Publications' => 'CSEL<br />Gov<br />Pub',
        'Government Microfiche' => 'CSEL<br />Gov<br />Pub<br />Mfiche',
        'Government Oversize' => 'CSEL<br />Gov<br />Pub<br />Ovs',
        'Lower Level 2' => 'CSEL',
        'Lower Level 2 - Oversize' => 'CSEL<br />Ovs',
        'MAGIC Maps' => 'CSEL<br />MAGIC<br />Map',
        'MAGIC Reference' => 'CSEL<br />MAGIC<br />Map<br />Ref',
        'Microcard' => 'CSEL<br />Mcard',
        'Microfiche' => 'CSEL<br />Mfiche',
        'Periodicals' => 'CSEL<br />Per.',
        'Reference' => 'CSEL<br />Ref.',
        'Reserve 1 day' => 'CSEL',
        'Reserve 14 day' => 'CSEL',
        'Reserve 3 day' => 'CSEL',
        'Reserve 3 hour' => 'CSEL',
        'Reserve 3 hour Device' => 'CSEL',
        'Reserve 7 day' => 'CSEL',
        'Service Desk' => 'CSEL',
    ),
    'IQUW' => array(
        'Africana Studies' => 'African<br />Studies',
        'Bureau of Business & Economic Research' => 'BBER',
        'Bureau of Business & Economic Research Reference' => 'BBER<br />Ref',
        'Bureau of Business & Economic Research Storage' => 'BBER<br />Storage',
        'Clark Field Archive and Library' => 'Clark<br />Field',
        'Language Learning Center' => 'LLC',
        'LGBTQ Resource Center' => 'LGBTQ',
        'Museum of Southwest Biology' => 'MSB',
        'Native American Studies' => 'Native<br />Amer.',
        'Native American Studies Reference' => 'Native<br />Amer.<br />Ref',
        "Women's Resource Center" => 'WWRC',
        "Women's Resource Center Reference" => 'WWRC<br />Ref',
        "Women's Resource Center Videos" => 'WWRC<br />Video',
    ),
);