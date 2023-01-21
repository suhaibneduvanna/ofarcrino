<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>of Arcrino</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Add Result</h1>
        <form onsubmit="return confirm('Are you sure?')" id="result_form">
            <div id="form_body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="category">Category</label>
                        <select required class="form-control" name="category" id="category">
                            <option value="" disabled selected>Select category</option>
                            <option value="Sub Junior">Sub Junior</option>
                            <option value="Junior">Junior</option>
                            <option value="Senior">Senior</option>
                            <option value="General">General</option>

                        </select>
                    </div>
                    <!-- <div class="form-group col-md-4">
                        <label for="item">Item</label>
                        <select required class="form-control" name="item" id="item">
                            <option value="" disabled selected>Select Item</option>
                            <option>Poem Mal</option>
                            <option>Poem Eng</option>
                            <option>Poem Uru</option>
                            <option>Poem Ara</option>
                        </select>
                    </div> -->
                    <div class="form-group col-md-4">
                        <label for="item">Item</label>
                        <input required name="item" type="text" class="form-control" id="item" placeholder="Item">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="result_no">Result No</label>
                        <input required name="result_no" type="text" class="form-control" id="result_no" placeholder="Result No">
                    </div>
                </div>
                <hr>
                <!-- Single row -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputAddress">Pos</label>
                        <input required name="pos[]" type="text" class="form-control" placeholder="Pos">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">Name</label>
                        <input required name="names[]" type="text" class="form-control" placeholder="Participant's name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="group">Group</label>
                        <select required class="form-control" name="groups[]">
                            <option value="" disabled selected>Select Group</option>
                            <option>Arabesque</option>
                            <option>Baroque</option>
                            <option>Romanesque</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="class">Class</label>
                        <select required class="form-control" name="classes[]">
                            <option value="" disabled selected>Select Class</option>
                            <option>UG1</option>
                            <option>UG2</option>
                            <option>UG3</option>
                            <option>UG4</option>
                            <option>UG5</option>
                            <option>PG1</option>
                            <option>PG2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="point">Point</label>
                        <input min="0" required name="points[]" type="number" class="form-control" placeholder="Points">
                    </div>
                </div>
                <!-- Single row -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputAddress">Pos</label>
                        <input required name="pos[]" type="text" class="form-control" placeholder="Pos">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">Name</label>
                        <input required name="names[]" type="text" class="form-control" id="participant" placeholder="Participant's name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="group">Group</label>
                        <select required class="form-control" name="groups[]">
                            <option value="" disabled selected>Select Group</option>
                            <option>Arabesque</option>
                            <option>Baroque</option>
                            <option>Romanesque</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="class">Class</label>
                        <select required class="form-control" name="classes[]">
                            <option value="" disabled selected>Select Class</option>
                            <option>UG1</option>
                            <option>UG2</option>
                            <option>UG3</option>
                            <option>UG4</option>
                            <option>UG5</option>
                            <option>PG1</option>
                            <option>PG2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="point">Point</label>
                        <input min="0" required name="points[]" type="number" class="form-control" placeholder="Points">
                    </div>
                </div>

                <!-- Single row -->
                <div id="single_row0" class="form-row ">
                    <div class="form-group col-md-2">
                        <label for="inputAddress">Pos</label>
                        <input required name="pos[]" type="text" class="form-control" placeholder="Pos">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">Name</label>
                        <input required name="names[]" type="text" class="form-control" placeholder="Participant's name">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="group">Group</label>
                        <select required class="form-control" name="groups[]">
                            <option value="" disabled selected>Select Group</option>
                            <option>Arabesque</option>
                            <option>Baroque</option>
                            <option>Romanesque</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="class">Class</label>
                        <select required class="form-control" name="classes[]">
                            <option value="" disabled selected>Select Class</option>
                            <option>UG1</option>
                            <option>UG2</option>
                            <option>UG3</option>
                            <option>UG4</option>
                            <option>UG5</option>
                            <option>PG1</option>
                            <option>PG2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="point">Point</label>
                        <input min="0" required name="points[]" type="number" class="form-control" placeholder="Points">
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-end">
                <button type="button" onclick="duplicate()" class="btn btn-primary">Add Field</button>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-firestore.js"></script>

    <script>
        const firebaseConfig = {
            apiKey: "AIzaSyAJf7ghbO3hFVDw-FQcj78886LhWJP0psg",
            authDomain: "ofarc-580e4.firebaseapp.com",
            projectId: "ofarc-580e4",
            storageBucket: "ofarc-580e4.appspot.com",
            messagingSenderId: "392416314916",
            appId: "1:392416314916:web:66eceb55a9246e82e0bab1"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);


        $('#result_form').on('submit', function(e) {

            e.preventDefault();

            $.ajax({
                type: 'post',
                url: 'add_result.php',
                data: $('#result_form').serialize(),

                success: async function(response) {
                    let res = JSON.parse(response);
                    if (res.status = 1) {

                        let arr = res.data;
                        let obj = {
                            after: res.after
                        }

                        // let arr2 = res.data;
                        // let obj2 = {
                        //     after: res.after
                        // }

                        await arr.forEach(element => {
                            if (element[3] in obj) {
                                let val = obj[element[3]] + parseInt(element[4])
                                obj[element[3]] = val

                            } else {

                                obj[element[3]] = parseInt(element[4])
                            }
                        });

                        // await arr2.forEach(element => {
                        //     if (element[2] in obj2) {
                        //         let val = obj2[element[2]] + parseInt(element[4])
                        //         obj2[element[2]] = val
                        //     } else {
                        //         obj2[element[2]] = parseInt(element[4])
                        //     }
                        // });


                        for (const key in obj) {
                            if (key != 'after') {
                                obj[key] = firebase.firestore.FieldValue.increment(obj[key]);
                            }
                        }

                        // for (const key in obj2) {
                        //     if (key != 'after') {

                        //         obj2[key] = firebase.firestore.FieldValue.increment(obj2[key]);
                        //     }
                        // }

                        // console.log(obj2)

                        let db = await firebase.firestore()
                        db.collection("class_results").doc('619XMu0axNenqG5gMkgs').update(obj).then(() => { 
                            alert("Scores successfully updated")
                            document.getElementById("result_form").reset();
                        })

                        // db.collection("results").doc('uOKfYlUulT4mpQY1OH69').update(obj2).then(() => {
                        //     alert("Scores successfully updated")
                        // })


                    } else {

                        alert("Error occured try again later")
                    }



                },

                error: function(error) {

                    alert("Internal Error")


                }
            });





        });
        var i = 0;

        function duplicate() {
            var parent = document.getElementById('form_body');
            var original = document.getElementById('single_row' + i);
            var clone = original.cloneNode(true); // "deep" clone
            clone.id = "single_row" + ++i; // there can only be one element with an ID
           
            parent.appendChild(clone);
        }
    </script>




</body>

</html>