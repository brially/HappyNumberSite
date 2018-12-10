export default class Task {

    constructor(description = ''){
        this.description = description;
    }


    prepare(){
        console.log('doing something');
    }

}