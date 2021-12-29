window.onload = () =>{
    let button = document.querySelector('#btn');
    button.addEventListener('click', calculateBMI);
}


function calculateBMI(){
    let height = parseInt(document.querySelector('#height').value);
    let weight = parseInt(document.querySelector('#weight').value);
    let result = document.querySelector('#result');
    console.log(height);
    if(height === '' || isNaN(height) || height < 0){
        result.value = 'Please provide a valid height';
    }else if(weight === '' || isNaN(weight) || weight < 0){
        result.value = 'Please provide a valid weight';
    }


    else{
         let bmi = (weight / ((height * height) / 10000)).toFixed(2); 


         if(bmi < 18.6){
             result.value = `Under Weight : <span>${bmi}</span>`;
         }else if(bmi >= 18.6 && bmi < 24.9){
            result.value = `Normal : <span>${bmi}</span>`;
         } else{
            result.value = `Over Weight : <span>${bmi}</span>`;
         }
    }
	
	$.post('bmi.php',{stdBmiResult:result});
	
}