// instantiate the bloodhound suggestion engine
var countries = new Bloodhound({  
  datumTokenizer: function(countries) {
      return Bloodhound.tokenizers.whitespace(countries.value);
  },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
    url: "http://vocab.nic.in/rest.php/country/json",
    filter: function(response) {      
      return response.countries;
    }
  }
});

// initialize the bloodhound suggestion engine
countries.initialize();

// instantiate the typeahead UI
$('.typeahead').typeahead(
  { hint: true,
    highlight: true,
    minLength: 1
  }, 
  {
  name: 'countries',
  displayKey: function(countries) {
    return countries.country.country_name;        
  },
  source: countries.ttAdapter()
});
