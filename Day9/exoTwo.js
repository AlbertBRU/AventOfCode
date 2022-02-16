boardInput = [
['2','1','9','9','9','4','3','2','1','0',],
['3','9','8','7','8','9','4','9','2','1',],
['9','8','5','6','7','8','9','8','9','2',],
['8','7','6','7','8','9','6','7','8','9',],
['9','8','9','9','9','6','5','6','7','8',]
];

function drawBoard() {
  const boardDiv = document.getElementById('board')

  // On créé chaque ligne, pour 20 ligne au total. Le compte de la boucle for commence à 1 pour avoir des dataset plus harmonieux.
  for (let row = 1; row < 6; row++) {
      cellRow = document.createElement('div');
      cellRow.classList.add('cellRow');
      // on créé pour chaque ligne un id (rowX) indiquant le numéro de ligne.
      cellRow.id = 'row'+ row ;
      // On insère cette ligne dans notre tableau
      boardDiv.append(cellRow);
      // Pour chaque ligne créée, on vient créer autant de cellule par ligne qu'il y a de ligne, pour obtenir un carré.
      for (let cell = 1; cell < 11; cell++) {
          cellToInsert = document.createElement('div');
          cellToInsert.classList.add('cell');
          // chaque cell aura un data-row correspondant au numéro de sa ligne, et un data-cell correspondant à sa position sur la ligne.
          cellToInsert.dataset.row = row;
          cellToInsert.dataset.cell = cell;
          cellToInsert.textContent= boardInput[row-1][cell-1];
          // Et pour finir, on insère ces cellules fraichement créées dans notre ligne, avant que la boucle ne reprenne la création de la ligne suivante.
          cellRow.append(cellToInsert)
      }
  }
};

drawBoard();

rows = document.querySelectorAll('.cellRow')

console.log(rows);

function rideTheBoard() {
  
  let mainCell = document.querySelector('[data-row = "1"][data-cell = "1"]')
  mainCell.classList.add('cellCurrent')
  
  const board = document.getElementById('board');
  
  while (mainCell.dataset.row != '10' && mainCell.dataset.cell != '10') {
    // la mainCell est la cellule principale.
    let mainCell = document.querySelector('.cellCurrent');
    // Pour avoir la position actuelle du joueur, on récupère le numéro de ligne et de cellule sur lesquels est la tête
    const currentDataCell = mainCell.dataset.cell;
    const currentDataRow = mainCell.dataset.row;
    // On prépare le data-cell ou nous voulont aller. parseInt va transformer la string en num, permettant d'additionner 1.
    const siblingDataCell = parseInt(currentDataCell) + 1;
    // On peut selectionner la cellule sur laquelle bouger, grace au data-cell calculé plus haut.
    let siblingCell = document.querySelector('[data-row = "'+currentDataRow+'"][data-cell = "'+siblingDataCell+'"]');
    if (siblingCell) {
      siblingCell.classList.add('cellCurrent');
      mainCell.classList.remove('cellCurrent');
    }else {
      let siblingCell = document.querySelector('[data-row = "'+currentDataRow+1+'"][data-cell = "1"]')
      siblingCell.classList.add('cellCurrent');
      mainCell.classList.remove('cellCurrent');
    }
    
  }
}




