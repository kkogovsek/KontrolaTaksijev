Skripta za vnašanje izmišljenih podatkov v bazo
----------------------------------

Skripta je napisana v jeziku PHP, konfigurira pa se jo z JSON zapisom

Potrebni programi za zagon:

*	PHP5
*	PHP5-mysql
*	PHP5-curl

Primer konfiguracije:

		{
			"server":"ip",
			"database":"db",
			"username":"user",
			"password":"pass",
			"tables":[
				{
					"name":"ime_tabele",
					"count":"st_elementov",
					"attributes":[
						{
							"name":"ime_atrubuta",
							"type":"tip_mockaroo_api",
							"parm_1":"val1",
							"parm_2":"val2"
						}
					]
				}
			]
		}

Tipe podatkov in dodatne kritetije lahko najdete na uradni [strani](http://www.mockaroo.com/api/docs#).

Program zaženemo z ukazom:

		php generate_script.php <pot_do_konfiguracije>