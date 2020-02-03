
<elbert-clinic-component inline-template :elbert_watcher="elbert_watcher" :show="is_show">
    <div>
    <div class="show-hide" v-if="is_show">
        <button @click="_invokeParentMethod()" >Click Me - ELBERT</button>
        <button >Click Me 2 - ELBERT</button>

        <template>
        <v-row justify="center">
            <v-dialog v-model="dialog" persistent max-width="290">
            <v-card>

                <v-card-title class="headline">Use Google's location service?</v-card-title>
                <v-card-text>Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</v-card-text>
                <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="green darken-1" text @click="dialog = false">Disagree</v-btn>
                <v-btn color="green darken-1" text @click="dialog = false">Agrees</v-btn>
                </v-card-actions>
            </v-card>
            </v-dialog>
        </v-row>
        </template>
    </div>
    </div>
</elbert-clinic-component>
