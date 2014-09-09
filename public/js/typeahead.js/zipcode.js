
      //FirstName Search Engine
      var Zipcode = new Bloodhound({
        datumTokenizer: function (d) {
            return Bloodhound.tokenizers.whitespace(d.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: 'http://aprile-dev.machinespeak.systems/zipcode?q=%QUERY',
            filter: function ( Zipcode ) {

                return $.map(Zipcode.zipcode, function (zipcode) {
                    return {
                        value: zipcode.zipcode + " " + zipcode.city + " " + zipcode.state
                    };
                });
            }
        }
      });
      Zipcode.initialize();

      //instantiate the typeahead UI for First Name Lookup
      $('#remote .typeahead').typeahead( null, {
      highlight: true
      },
      {
        displayKey: 'value',
        source: Zipcode.ttAdapter()
    });

