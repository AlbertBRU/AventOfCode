let bf = [2,5,2,3,5,3,5,5,4,2,1,5,5,5,5,1,2,5,1,1,1,1,1,5,5,1,5,4,3,3,1,2,4,2,4,5,4,5,5,5,4,4,1,3,5,1,2,2,4,2,1,1,2,1,1,4,2,1,2,1,2,1,3,3,3,5,1,1,1,3,4,4,1,3,1,5,5,1,5,3,1,5,2,2,2,2,1,1,1,1,3,3,3,1,4,3,5,3,5,5,1,4,4,2,5,1,5,5,4,5,5,1,5,4,4,1,3,4,1,2,3,2,5,1,3,1,5,5,2,2,2,1,3,3,1,1,1,4,2,5,1,2,4,4,2,5,1,1,3,5,4,2,1,2,5,4,1,5,5,2,4,3,5,2,4,1,4,3,5,5,3,1,5,1,3,5,1,1,1,4,2,4,4,1,1,1,1,1,3,4,5,2,3,4,5,1,4,1,2,3,4,2,1,4,4,2,1,5,3,4,1,1,2,2,1,5,5,2,5,1,4,4,2,1,3,1,5,5,1,4,2,2,1,1,1,5,1,3,4,1,3,3,5,3,5,5,3,1,4,4,1,1,1,3,3,2,3,1,1,1,5,4,2,5,3,5,4,4,5,2,3,2,5,2,1,1,1,2,1,5,3,5,1,4,1,2,1,5,3,5,2,1,3,1,2,4,5,3,4,3];











// Mon ordinateur n'a pas la capacité de traverser un tableau de plus de 92 millions d'entrée apparemment...
// On va tenter une autre approche en php


// TRADUCTION DU CODE PHP POUR EXECUTION ASYNCHRONE 

for (let d = 0; d < 256; d++) {
  setTimeout(() => {
    countf();
    console.log(bf.length)
  }, 100*d);
  
}
console.log(bf.length)


function countf() {
  
  let newf = 0;  

  bf.forEach( (f, k) => {
     // Si le poisson à plus d'un jour avant de se dédoubler, alors on retire un jour...
     if (f > 0) {
      bf[k] -= 1;
    }
    // Sinon, le poisson retourne à son état initial et produira un nouveau poisson en fin de journée.
    else {
      bf[k] = 6;
      newf += 1;
    }
  });
  // A la fin de la journée, on pousse tous les nouveaux poissons dans le tableau
  for (let index = 0; index < newf; index++) {
    bf.push(8);    
  }
};