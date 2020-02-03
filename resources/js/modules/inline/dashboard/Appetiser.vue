<script>
export default {
name: 'appetiser-app',
data() {
    return {
        showPicker: false,
        showPicker_end: false,
        selectedDate: null,
        selectedDate_end: null,
        dateArray: [],
        selectedDates: [],
        items: [],
        dateEvent: '',
        selectedCbox: [],
        titleDate: ''
    }
},
methods: {
    getDatesArray(startDate, stopDate, dateEvent) {
        this.dateArray = new Array();
        this.selectedDates = new Array();
        console.log(startDate, stopDate);

        var start = new Date(startDate);
        var end = new Date(stopDate);

        var month = new Array();
            month[0] = "January";
            month[1] = "February";
            month[2] = "March";
            month[3] = "April";
            month[4] = "May";
            month[5] = "June";
            month[6] = "July";
            month[7] = "August";
            month[8] = "September";
            month[9] = "October";
            month[10] = "November";
            month[11] = "December";

        var weekday = new Array(7);
            weekday[0] = "Sunday";
            weekday[1] = "Monday";
            weekday[2] = "Tuesday";
            weekday[3] = "Wednesday";
            weekday[4] = "Thursday";
            weekday[5] = "Friday";
            weekday[6] = "Saturday";

        this.titleDate = month[new Date(start).getMonth()] + " " + new Date(start).getFullYear();

        const form = new FormData();

        for(var i = 0; i <this.selectedCbox.length; i++) {
            this.selectedDates.push({['selected_day']: this.selectedCbox[i]});
            console.log('sdates', this.selectedDates);
        }

        while (start <= end) { //always add new Date(start)

            if(this.selectedCbox.includes(weekday[new Date(start).getDay()])) {
                this.dateArray.push({['weekday']: weekday[new Date(start).getDay()],
                        ['day']: new Date(start).getDate(),
                        ['month']: month[new Date(start).getMonth()],
                        ['year']: new Date(start).getFullYear(),
                        ['event']: this.dateEvent,
                        ['has_event']: "is_ok"});
                axios.post('save_event',
                {
                    event: this.dateEvent,
                    event_date: new Date(start).toISOString().slice(0, 19).replace('T', ' ')
                },
                {
                   'Content-Type': 'application/x-www-form-urlencoded',
                }).then(response => {
                    console.log('response stat'+response.data);
                    const data   = response.data;
                    const status = data.status;
                    if (status) {
                    }
                }).catch(err => {
                    this.loader = false;
                });
            } else {
                this.dateArray.push({['weekday']: weekday[new Date(start).getDay()],
                        ['day']: new Date(start).getDate(),
                        ['month']: month[new Date(start).getMonth()],
                        ['year']: new Date(start).getFullYear(),
                        ['event']: this.dateEvent,
                        ['has_event']: 'is_none'});
            }
                start = new Date(start).setDate(new Date(start).getDate() + 1);
        }
        console.log('selected d', this.selectedDates);
        console.log('datea rr', this.dateArray);
        return this.dateArray;
    }
},
mounted: function() {
}
};
</script>
