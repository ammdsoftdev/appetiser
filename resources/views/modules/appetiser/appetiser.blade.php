<appetiser-app inline-template>
<v-app style="background: rgb(245, 245, 245)">
    <template>
        <v-card color="grey lighten-4" flat height="70px" primary tile>
            <v-toolbar dense color="primary" dark>
                <v-app-bar-nav-icon color="#fff"></v-app-bar-nav-icon>
                <v-toolbar-title color="#fff">Appetiser</v-toolbar-title>
                <v-spacer></v-spacer>
            </v-toolbar>
        </v-card>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <v-card  max-width="344" class="ml-4">
                        <v-card-text>
                        <h3>EVENT</h3>
                        <v-flex xs12 sm12>
                            <v-text-field v-model="dateEvent" single-line outlined>
                            </v-text-field>
                        </v-flex>

                        <!-- DATE START -->
                        <v-row>
                            <v-col class="col-sm-6">
                            <v-menu
                                v-model="showPicker"
                                :close-on-content-click="false"
                                transition="scale-transition"
                                offset-y
                                max-width="290px"
                                min-width="290px">
                                <template v-slot:activator="{ on }">
                                    <v-text-field
                                        v-model="selectedDate"
                                        label="From"
                                        persistent-hint
                                        readonly
                                        v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-date-picker v-model="selectedDate" no-title @input="showPicker = false">
                                </v-date-picker>
                            </v-menu>
                            </v-col>
                            <v-col class="col-sm-6">
                            <v-menu
                                v-model="showPicker_end"
                                :close-on-content-click="false"
                                transition="scale-transition"
                                offset-y
                                max-width="290px"
                                min-width="290px">
                                <template v-slot:activator="{ on }">
                                    <v-text-field
                                        v-model="selectedDate_end"
                                        label="To"
                                        persistent-hint
                                        readonly
                                        v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-date-picker v-model="selectedDate_end" no-title @input="showPicker_end = false">
                                </v-date-picker>
                            </v-menu>
                            </v-col>
                        </v-row>

                        <v-row no-gutters>
                            <v-col class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Mon" value="Monday"></v-checkbox>
                                    </div>
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Tues" value="Tuesday"></v-checkbox>
                                    </div>
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Wed" value="Wednesday"></v-checkbox>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Thu" value="Thursday"></v-checkbox>
                                    </div>
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Fri" value="Friday"></v-checkbox>
                                    </div>
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Sat" value="Saturday"></v-checkbox>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 pa-0 pl-2">
                                        <v-checkbox v-model="selectedCbox" label="Sun" value="Sunday"></v-checkbox>
                                    </div>
                                </div>
                            </v-col>
                        </v-row>

                        <!-- DATE START -->
                        <v-btn color="primary" @click="getDatesArray(selectedDate, selectedDate_end, dateEvent)">
                            save
                        </v-btn>
                        </v-card-text>
                    </v-card>
                </div>
                <div class="col-sm-8">
                    <h2>@{{titleDate}}</h2>
                    <template  v-for="(dates, index) in dateArray" >
                        <template v-if="dates.has_event == 'is_ok'">
                            <v-card class="mb-1 mr-4" style="background: #c8e8d9" >
                                <div class="container-fluid">
                                    <div class="row">
                                        <p class="col-sm-3 text-uppercase font-weight-medium my-2 ml-2" key="index">
                                            @{{dates.day}} - @{{dates.weekday}}
                                        </p>
                                        <p class="col-sm-6 text-uppercase font-weight-medium my-2">@{{dates.event}}</p>
                                    </div>
                                </div>
                            </v-card>
                        </template>
                        <template v-else>
                            <v-card class="mb-1 mr-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <p class="col-sm-3 my-2 ml-2 text-uppercase font-weight-medium" key="index">
                                        @{{dates.day}} - @{{dates.weekday}}
                                    </p>
                                </div>
                            </div>
                            </v-card>
                        </template>
                    </template>
                </div>
            </div>
        </div>

    </template>
</v-app>
</appetiser-app>

