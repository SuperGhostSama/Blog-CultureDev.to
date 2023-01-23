function validateCategory() {
    if (document.getElementById('category').value == '' || !/^[a-zA-Z]{5,}$/.test(document.getElementById('category').value)) {
        document.getElementById('category').setAttribute('style', 'color:red; border: 1px red solid ;');
  
        document.getElementById('validateCategory').innerText = 'Please enter a valid category! check that the title contains at least 5 characters and without special characters!!';
        document.getElementById('validateCategory').setAttribute('style', 'color:red;font-size:13px;');
        document.getElementById("save").disabled = true;
        document.getElementById("update").disabled = true;
    } else {
        document.getElementById('category').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('validateCategory').innerText = '';
        document.getElementById("save").disabled = false;
        document.getElementById("update").disabled = false;
    }
}

function validateTitle() {
    if (document.getElementById('title').value == '' || !/^[a-zA-Z]{5,}$/.test(document.getElementById('title').value)) {
        document.getElementById('title').setAttribute('style', 'color:red; border: 1px red solid ;');
  
        document.getElementById('validateTitle').innerText = 'Please enter a valid title! check that the title contains at least 5 characters and without special characters!!';
        document.getElementById('validateTitle').setAttribute('style', 'color:red;font-size:13px;');
        document.getElementById("save").disabled = true;
        document.getElementById("update").disabled = true;
    } else {
        document.getElementById('title').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('validateTitle').innerText = '';
        document.getElementById("save").disabled = false;
        document.getElementById("update").disabled = false;
    }
}

function validateDescription() {
    if (document.getElementById('description').value == '' || !/^[a-zA-Z0-9-]+$/.test(document.getElementById('description').value)) {
        document.getElementById('description').setAttribute('style', 'color:red; border: 1px red solid ;');
  
        document.getElementById('validateDescription').innerText = 'Please enter a valid description! check that the description does not contain any special characters!!';
        document.getElementById('validateDescription').setAttribute('style', 'color:red;font-size:13px;');
        document.getElementById("save").disabled = true;
        document.getElementById("update").disabled = true;
    } else {
        document.getElementById('description').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('validateDescription').innerText = '';
        document.getElementById("save").disabled = false;
        document.getElementById("update").disabled = false;
    }
}

  



