// Instantiate the Bloodhound suggestion engine
var movies = new Bloodhound({
    datumTokenizer: function (datum) {
        return Bloodhound.tokenizers.whitespace(datum.value);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        url: 'http://api.themoviedb.org/3/search/movie?query=%QUERY&api_key=470fd2ec8853e25d2f8d86f685d2270e',
        filter: function (movies) {
            return $.map(movies.results, function (movie) {
                return {
                    value: movie.original_title
                };
            });
        }
    }
});

// Initialize the Bloodhound suggestion engine
movies.initialize();

// Instantiate the Typeahead UI
$('.typeahead').typeahead(null, {
    displayKey: 'value',
    source: movies.ttAdapter()
});
