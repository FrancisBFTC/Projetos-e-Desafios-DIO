var buttonAdd = document.getElementById('button-add');
var inputTask = document.getElementById('input-task');
var listOrder = document.getElementById('list');
var checkBoxList = null;
var indexList = 0;
var selectTask = 0;
var listArray = [];
var todoTags = "";

buttonAdd.addEventListener("click", listInfo, false);

function listInfo(){
	let stringCheckBox = inputTask.value;
	    
    if(!stringCheckBox){
    	return alert("O campo está vazio! Por favor, adicione uma tarefa.");
    }
   
   	if(listArray.includes(`${stringCheckBox}`)){
   		return alert("A lista já contém esta tarefa!");
   	}else{
		listArray.push(stringCheckBox);

		todoTags += `<li>
						<input type="checkbox" class="inputCheckList" onclick=disableCheck("checkBox"+${indexList}) id="checkBox${indexList}"/>
							<label>${stringCheckBox}</label>
					 </li>`;
	    listOrder.innerHTML = todoTags;
	    indexList++;

   	}

   	inputTask.value = "";

}

function disableCheck(idCheckBox){
	checkBoxList = document.getElementById(idCheckBox);
	checkBoxList.parentNode.disabled = true;
    checkBoxList.disabled=true;
    selectTask++;

    if(selectTask === indexList){
    	alert("Parabéns! Todas as suas tarefas foram concluídas!");
    	todoTags = ""
    	listOrder.innerHTML = todoTags;
    	listArray.splice(0, indexList);
    }
}