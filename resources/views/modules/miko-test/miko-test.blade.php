
<miko-clinic-component inline-template :miko_watcher="miko_watcher">
    <div>
        <button @click="_invokeParentMethod()" >Click Me</button>
        <button >Click Me 2</button>

        <template>
        <v-row justify="center">
            <v-dialog v-model="dialog" persistent max-width="290">
            <v-card>
                <v-card-title class="headline">Use Google's location service?</v-card-title>
                <v-card-text>Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</v-card-text>
                <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="green darken-1" text @click="dialog = false">Disagree</v-btn>
                <v-btn color="green darken-1" text @click="dialog = false">Agree</v-btn>
                </v-card-actions>
            </v-card>
            </v-dialog>
        </v-row>
        </template>

    </div>
</miko-clinic-component>
