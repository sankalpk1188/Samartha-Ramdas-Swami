var simplemaps_worldmap_mapdata={
  main_settings: {
    //General settings
    width: "responsive", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    popups: "detect",
    
    //State defaults
    state_description: "",
    state_color: "#aaa",
    state_hover_color: "#3480d9",
    state_url: "",
    border_size: 1,
    all_states_inactive: "no",
    all_states_zoomable: "",
    
    //Location defaults
    location_description: "Location description",
    location_color: "#000",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_pulse: "yes",
    location_url: "",
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 24,
    label_font: "Arial",
    hide_labels: "no",
   
    //Zoom settings
    zoom: "no",
    back_image: "no",
    initial_back: "no",
    initial_zoom: -1,
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 1,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "13px/1.5 sofiapro",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "yes",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    AF: {
      name: "Afghanistan"
    },
    AO: {
      name: "Angola"
    },
    AL: {
      name: "Albania"
    },
    AE: {
      name: "United Arab Emirates",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Condensers 90 m2</li><li>NMP Recovery Plant - 100 KLPD</li><li>Pilot Plant Skids - 6 Nos</li><li>2000 TPM Pyrolysis Oil Fractionation Plant</li><li>Bleaching System 1.5 KL/hr</li></ul><hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    },
    AR: {
      name: "Argentina"
    },
    AM: {
      name: "Armenia"
    },
    AU: {
      name: "Australia"
    },
    AT: {
      name: "Austria"
    },
    AZ: {
      name: "Azerbaijan"
    },
    BI: {
      name: "Burundi"
    },
    BE: {
      name: "Belgium"
    },
    BJ: {
      name: "Benin"
    },
    BF: {
      name: "Burkina Faso"
    },
    BD: {
      name: "Bangladesh"
    },
    BG: {
      name: "Bulgaria"
    },
    BH: {
      name: "Bahrain"
    },
    BA: {
      name: "Bosnia and Herzegovina"
    },
    BY: {
      name: "Belarus"
    },
    BZ: {
      name: "Belize"
    },
    BO: {
      name: "Bolivia"
    },
    BR: {
      name: "Brazil"
    },
    BN: {
      name: "Brunei Darussalam"
    },
    BT: {
      name: "Bhutan",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>100 LPH Heat Pump</li></ul></ul>"
    },
    BW: {
      name: "Botswana"
    },
    CF: {
      name: "Central African Republic"
    },
    CA: {
      name: "Canada"
    },
    CH: {
      name: "Switzerland"
    },
    CL: {
      name: "Chile"
    },
    CN: {
      name: "China",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>Valve Trays</li></ul>"
    },
    CI: {
      name: "Côte d'Ivoire"
    },
    CM: {
      name: "Cameroon",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Random Packing & Internals</li></ul>",
    },
    CD: {
      name: "Democratic Republic of the Congo"
    },
    CG: {
      name: "Republic of Congo"
    },
    CO: {
      name: "Colombia"
    },
    CR: {
      name: "Costa Rica"
    },
    CU: {
      name: "Cuba"
    },
    CZ: {
      name: "Czech Republic"
    },
    DE: {
      name: "Germany"
    },
    DJ: {
      name: "Djibouti"
    },
    DK: {
      name: "Denmark"
    },
    DO: {
      name: "Dominican Republic"
    },
    DZ: {
      name: "Algeria"
    },
    EC: {
      name: "Ecuador"
    },
    EG: {
      name: "Egypt",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    },
    ER: {
      name: "Eritrea"
    },
    EE: {
      name: "Estonia"
    },
    ET: {
      name: "Ethiopia"
    },
    FI: {
      name: "Finland"
    },
    FJ: {
      name: "Fiji"
    },
    GA: {
      name: "Gabon"
    },
    GB: {
      name: "United Kingdom",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>Bubble Cap</li></ul>"
    },
    GE: {
      name: "Georgia"
    },
    GH: {
      name: "Ghana"
    },
    GN: {
      name: "Guinea"
    },
    GM: {
      name: "The Gambia"
    },
    GW: {
      name: "Guinea-Bissau"
    },
    GQ: {
      name: "Equatorial Guinea"
    },
    GR: {
      name: "Greece"
    },
    GL: {
      name: "Greenland"
    },
    GT: {
      name: "Guatemala",
    },
    GY: {
      name: "Guyana"
    },
    HN: {
      name: "Honduras"
    },
    HR: {
      name: "Croatia"
    },
    HT: {
      name: "Haiti"
    },
    HU: {
      name: "Hungary"
    },
    ID: {
      name: "Indonesia",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    },
    IN: {
      name: "India",
      // description: "<img style=\"float:left; margin-right: 20px;\" src=\"http://cdgroup.ycstechsoft.com/logo.svg\" width=\"64\" height=\"64\" /><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>Add images</li><li>Use <code>&lt;html&gt;</code></li><li style=\"color: #d13c12\">Change color</li><li style=\"font-family: Monospace\">Change Font</li></ul>",
    },
    IE: {
      name: "Ireland"
    },
    IR: {
      name: "Iran"
    },
    IQ: {
      name: "Iraq",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>30 TPD White Spirit Distillation Plant</li></ul>",
    },
    IS: {
      name: "Iceland"
    },
    IL: {
      name: "Israel"
    },
    IT: {
      name: "Italy"
    },
    JM: {
      name: "Jamaica"
    },
    JO: {
      name: "Jordan"
    },
    JP: {
      name: "Japan",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>Structured Packing & Internals</li></ul>"
    },
    KZ: {
      name: "Kazakhstan"
    },
    KE: {
      name: "Kenya"
    },
    KG: {
      name: "Kyrgyzstan"
    },
    KH: {
      name: "Cambodia"
    },
    KR: {
      name: "Republic of Korea"
    },
    XK: {
      name: "Kosovo"
    },
    KW: {
      name: "Kuwait",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>White Spirit Plant - 20K Lit/Day</li><li>Use <code>&lt;html&gt;</code></li><li style=\"color: #d13c12\">Change color</li><li style=\"font-family: Monospace\">Change Font</li></ul>",
    },
    LA: {
      name: "Lao PDR"
    },
    LB: {
      name: "Lebanon"
    },
    LR: {
      name: "Liberia"
    },
    LY: {
      name: "Libya"
    },
    LK: {
      name: "Sri Lanka"
    },
    LS: {
      name: "Lesotho"
    },
    LT: {
      name: "Lithuania"
    },
    LU: {
      name: "Luxembourg"
    },
    LV: {
      name: "Latvia"
    },
    MA: {
      name: "Morocco"
    },
    MD: {
      name: "Moldova"
    },
    MG: {
      name: "Madagascar"
    },
    MX: {
      name: "Mexico"
    },
    MK: {
      name: "Macedonia"
    },
    ML: {
      name: "Mali"
    },
    MM: {
      name: "Myanmar"
    },
    ME: {
      name: "Montenegro"
    },
    MN: {
      name: "Mongolia"
    },
    MZ: {
      name: "Mozambique"
    },
    MR: {
      name: "Mauritania"
    },
    MW: {
      name: "Malawi"
    },
    MY: {
      name: "Malaysia",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>5 MLD Ultrafiltration  Water Treatment Plant</li></ul>",
    },
    NA: {
      name: "Namibia"
    },
    NE: {
      name: "Niger"
    },
    NG: {
      name: "Nigeria",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>3 Heat Pumps of 300 LPH</li></ul></ul>"
    },
    NI: {
      name: "Nicaragua"
    },
    NL: {
      name: "Netherlands"
    },
    NO: {
      name: "Norway"
    },
    NP: {
      name: "Nepal"
    },
    NZ: {
      name: "New Zealand"
    },
    OM: {
      name: "Oman",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>10 m2 WFE for Used Oil Refinery</li><li>Vacuum Batch Distillation Unit</li><li>Hazop Study of Dowtherm Distillation Plant</li></ul><hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    },
    PK: {
      name: "Pakistan"
    },
    PA: {
      name: "Panama"
    },
    PE: {
      name: "Peru"
    },
    PH: {
      name: "Philippines"
    },
    PG: {
      name: "Papua New Guinea"
    },
    PL: {
      name: "Poland"
    },
    KP: {
      name: "Dem. Rep. Korea"
    },
    PT: {
      name: "Portugal"
    },
    PY: {
      name: "Paraguay"
    },
    PS: {
      name: "Palestine"
    },
    QA: {
      name: "Qatar"
    },
    RO: {
      name: "Romania"
    },
    RU: {
      name: "Russia"
    },
    RW: {
      name: "Rwanda"
    },
    EH: {
      name: "Western Sahara"
    },
    SA: {
      name: "Saudi Arabia",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Anisole Distillation Turnkey Plant - 35 TPD</li><li>Control System for Toulene Distillation</li><li>3000 LPH WFE for Used Oil Refining</li><li>Resin Plant</li><li>Sulphur Bentonite Reactors</li><li>Caustic Dilution System </li></ul>",
    },
    SD: {
      name: "Sudan"
    },
    SS: {
      name: "South Sudan"
    },
    SN: {
      name: "Senegal"
    },
    SL: {
      name: "Sierra Leone"
    },
    SV: {
      name: "El Salvador"
    },
    RS: {
      name: "Serbia"
    },
    SR: {
      name: "Suriname"
    },
    SK: {
      name: "Slovakia"
    },
    SI: {
      name: "Slovenia"
    },
    SE: {
      name: "Sweden"
    },
    SZ: {
      name: "Swaziland"
    },
    SY: {
      name: "Syria"
    },
    TD: {
      name: "Chad"
    },
    TG: {
      name: "Togo"
    },
    TH: {
      name: "Thailand"
    },
    TJ: {
      name: "Tajikistan"
    },
    TM: {
      name: "Turkmenistan"
    },
    TL: {
      name: "Timor-Leste"
    },
    TN: {
      name: "Tunisia"
    },
    TR: {
      name: "Turkey"
    },
    TW: {
      name: "Taiwan"
    },
    TZ: {
      name: "Tanzania"
    },
    UG: {
      name: "Uganda"
    },
    UA: {
      name: "Ukraine"
    },
    UY: {
      name: "Uruguay"
    },
    US: {
      name: "United States",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Distillation Plant</li><li>Demisters</li></ul>",
    },
    UZ: {
      name: "Uzbekistan"
    },
    VE: {
      name: "Venezuela"
    },
    VN: {
      name: "Vietnam",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>100 Oxygen Concentrators</li></ul></ul>"
    },
    VU: {
      name: "Vanuatu"
    },
    YE: {
      name: "Yemen"
    },
    ZA: {
      name: "South Africa"
    },
    ZM: {
      name: "Zambia"
    },
    ZW: {
      name: "Zimbabwe",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>Sodium and Calcium Hypochlorite Plant</li></ul></ul>"
    },
    SO: {
      name: "Somalia"
    },
    GF: {
      name: "France"
    },
    FR: {
      name: "France"
    },
    ES: {
      name: "Spain"
    },
    AW: {
      name: "Aruba"
    },
    AI: {
      name: "Anguilla"
    },
    AD: {
      name: "Andorra"
    },
    AG: {
      name: "Antigua and Barbuda"
    },
    BS: {
      name: "Bahamas"
    },
    BM: {
      name: "Bermuda"
    },
    BB: {
      name: "Barbados"
    },
    KM: {
      name: "Comoros"
    },
    CV: {
      name: "Cape Verde"
    },
    KY: {
      name: "Cayman Islands"
    },
    DM: {
      name: "Dominica"
    },
    FK: {
      name: "Falkland Islands"
    },
    FO: {
      name: "Faeroe Islands"
    },
    GD: {
      name: "Grenada"
    },
    HK: {
      name: "Hong Kong"
    },
    KN: {
      name: "Saint Kitts and Nevis"
    },
    LC: {
      name: "Saint Lucia"
    },
    LI: {
      name: "Liechtenstein"
    },
    MF: {
      name: "Saint Martin (French)"
    },
    MV: {
      name: "Maldives"
    },
    MT: {
      name: "Malta"
    },
    MS: {
      name: "Montserrat"
    },
    MU: {
      name: "Mauritius"
    },
    NC: {
      name: "New Caledonia"
    },
    NR: {
      name: "Nauru"
    },
    PN: {
      name: "Pitcairn Islands"
    },
    PR: {
      name: "Puerto Rico"
    },
    PF: {
      name: "French Polynesia"
    },
    SG: {
      name: "Singapore",
      //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Vane Pack</li></ul>",
    },
    SB: {
      name: "Solomon Islands"
    },
    ST: {
      name: "São Tomé and Principe"
    },
    SX: {
      name: "Saint Martin (Dutch)"
    },
    SC: {
      name: "Seychelles"
    },
    TC: {
      name: "Turks and Caicos Islands"
    },
    TO: {
      name: "Tonga"
    },
    TT: {
      name: "Trinidad and Tobago"
    },
    VC: {
      name: "Saint Vincent and the Grenadines"
    },
    VG: {
      name: "British Virgin Islands"
    },
    VI: {
      name: "United States Virgin Islands"
    },
    CY: {
      name: "Cyprus"
    },
    RE: {
      name: "Reunion (France)"
    },
    YT: {
      name: "Mayotte (France)"
    },
    MQ: {
      name: "Martinique (France)"
    },
    GP: {
      name: "Guadeloupe (France)"
    },
    CW: {
      name: "Curaco (Netherlands)"
    },
    IC: {
      name: "Canary Islands (Spain)"
    }
  },
  locations: {
    "0": {
        name: "Singapore",
        lat: "1.3521",
        lng: "103.8198",
        color: "#ff7f00",
        type: "marker",
        size: "25",
        description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Consultancy service for energy saving</li></ul>",
    },
    "1": {
        name: "United Arab Emirates",
        lat: "23.2048",
        lng: "53.2708",
        color: "#ff7f00",
        type: "marker",
        size: "30",
        //description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Condensers 90 m2</li><li>NMP Recovery Plant - 100 KLPD</li><li>Pilot Plant Skids - 6 Nos</li><li>2000 TPM Pyrolysis Oil Fractionation Plant</li><li>Bleaching System 1.5 KL/hr</li></ul><hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    },
    "2": {
        name: "Mongolia",
        lat: "44.4735",
        lng: "101",
        color: "#ff7f00",
        type: "marker",
        size: "25",
        description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Detailed Energy Audit for a foundry</li></ul>",
    },
    "3": {
        name: "Saudi Arabia",
        lat: "23.8859",
        lng: "45.0792",
        color: "#ff7f00",
        type: "marker",
        size: "25",
        description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Building Energy Modelling</li></ul>",
    },
    "4": {
        name: "Sri Lanka",
        lat: "6.3974",
        lng: "80.8328",
        color: "#ff7f00",
        type: "marker",
        size: "25",
        description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Investment Grade Energy Audit</li></ul>",
    },
    "5": {
        name: "Jordan",
        lat: "29.8859",
        lng: "36.0792",
        color: "#ff7f00",
        type: "marker",
        size: "25",
        description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>ISO 50001 for water distribution system</li></ul>",
    },
    "6": {
        name: "Maldives",
        lat: "2.3974",
        lng: "72.8328",
        color: "#ff7f00",
        type: "marker",
        size: "25",
        description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>ASHRAE level 3 Energy Audit for luxury Hotels</li></ul>",
    },
    // "7": {
    //     name: "Bengaluru, India",
    //     lat: "14.3974",
    //     lng: "76.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>M&V consultancy for automobile industry</li></ul>",
    // },
    // "8": {
    //     name: "Chennai, India",
    //     lat: "14.3974",
    //     lng: "79.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Data center reliability audit & TIER assessment</li></ul>",
    // },
    // "9": {
    //     name: "Visakhapatnam, India",
    //     lat: "17.3974",
    //     lng: "82.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Utility performance study for Pharma plant</li></ul>",
    // },
    // "10": {
    //     name: "Vapi, India",
    //     lat: "18.3974",
    //     lng: "72.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Utility performance study for Pharma plant</li></ul>",
    // },
    // "11": {
    //     name: "Mundra, India",
    //     lat: "21.3974",
    //     lng: "72.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Energy audit at largest coal-based power plant</li></ul>",
    // },
    // "12": {
    //     name: "Pithampur, India",
    //     lat: "21.3974",
    //     lng: "77.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Energy Maturity assessment for Pharma plant</li></ul>",
    // },
    // "13": {
    //     name: "Mumbai, India",
    //     lat: "15.3974",
    //     lng: "73.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>System reliability + energy saving study for a commercial building</li></ul>",
    // },
    // "14": {
    //     name: "Pune, India",
    //     lat: "16.3974",
    //     lng: "75.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "20",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Head Office</li></ul>",
    // },
    // "15": {
    //     name: "Chandrapur, India",
    //     lat: "19.3974",
    //     lng: "79.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Energy audit at thermal power plant</li></ul>",
    // },
    // "16": {
    //     name: "Delhi, India",
    //     lat: "26.3974",
    //     lng: "75.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Investment grade audit for food industry</li></ul>",
    // },
    // "17": {
    //     name: "Baddi, India",
    //     lat: "30.3974",
    //     lng: "75.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Training for energy & utility managers</li></ul>",
    // },
    // "18": {
    //     name: "Guwahati, India",
    //     lat: "25.3974",
    //     lng: "91.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Investment grade audit at major Pharma plant</li></ul>",
    // },
    // "19": {
    //     name: "Kolkata, India",
    //     lat: "21.3974",
    //     lng: "86.8328",
    //     color: "#ff7f00",
    //     type: "marker",
    //     size: "12",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>ASHRAE level 2 Energy Audit for luxury Hotels</li></ul>",
    // },
    // "5": {
    //     name: "Riyadh, Saudi Arabia",
    //     lat: "24.7136",
    //     lng: "46.6753",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Distillation Columns for Used Oil</li></ul>",
    // },
    // "6": {
    //     name: "Iraq",
    //     lat: "33.2232",
    //     lng: "43.6793",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>30 TPD White Spirit Distillation Plant</li></ul>",
    // },
    // "7": {
    //     name: "Abu Dhabi",
    //     lat: "24.4539",
    //     lng: "54.3773",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "20",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>5 m2 WFE for Used Oil</li><li>Wipers for WFE</li></ul>",
    // },
    // "8": {
    //     name: "Vizag, India",
    //     lat: "17.6868",
    //     lng: "83.2185",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>HPCL</li></ul>",
    // },
    // "9": {
    //     name: "United States",
    //     lat: "37.0902",
    //     lng: "-95.7129",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Distillation Plant</li><li>Demisters</li></ul>",
    // },
    // "10": {
    //     name: "Dhahran, Saudi Arabia",
    //     lat: "26.2361",
    //     lng: "50.0393",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li><li>Static Mixer</li></ul>",
    // },
    // "11": {
    //     name: "Jawa barat, Indonesia",
    //     lat: "7.0909",
    //     lng: "107.6689",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    // },
    // "12": {
    //     name: "Cameroon",
    //     lat: "4.0511",
    //     lng: "9.7679",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Random Packing & Internals</li></ul>",
    // },
    // "13": {
    //     name: "Singapore",
    //     lat: "1.3521",
    //     lng: "103.8198",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Vane Pack</li></ul>",
    // },
    // "14": {
    //     name: "United Kingdom",
    //     lat: "51.5072",
    //     lng: "0.1276",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Bubble Cap</li></ul>",
    // },
    // "15": {
    //     name: "Japan",
    //     lat: "36.2048",
    //     lng: "138.2529",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    // },
    // "16": {
    //     name: "Shanghai, China",
    //     lat: "31.2304",
    //     lng: "121.4737",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Valve Trays</li></ul>",
    // },
    // "17": {
    //     name: "Egypt",
    //     lat: "26.8206",
    //     lng: "30.8025",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>Structured Packing & Internals</li></ul>",
    // },
    // "18": {
    //     name: "Malaysia",
    //     lat: "4.2105",
    //     lng: "105.9758",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "20",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 200px\"; float: left;><li>5 MLD Ultrafiltration  Water Treatment Plant</li></ul>",
    // },
    // "19": {
    //     name: "Vietnam",
    //     lat: "14.0583",
    //     lng: "108.2772",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>100 Oxygen Concentrators</li></ul></ul>"
    // },
    // "20": {
    //     name: "Zimbabwe",
    //     lat: "-19.0154",
    //     lng: "29.1549",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>Sodium and Calcium Hypochlorite Plant</li></ul></ul>"
    // },
    // "21": {
    //     name: "Nigeria",
    //     lat: "9.0820",
    //     lng: "8.6753",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>3 Heat Pumps of 300 LPH</li></ul></ul>"
    // },
    // "22": {
    //     name: "Bhutan",
    //     lat: "27.5142",
    //     lng: "90.4336",
    //     color: "#2E67A9",
    //     type: "marker",
    //     size: "25",
    //     description: "<hr style=\"margin: 5px\";><ul class=\"list-marked\" style=\"width: 175px\"; float: left;><li>100 LPH Heat Pump</li></ul></ul>"
    // },
    
  },
  labels: {},
  regions: {},
  legend: {
    entries: []
  }
};