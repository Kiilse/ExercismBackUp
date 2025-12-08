// @ts-check
//
// The line above enables type checking for this file. Various IDEs interpret
// the @ts-check directive. It will give you helpful autocompletion when
// implementing this exercise.

/**
 * Determines how long it takes to prepare a certain juice.
 *
 * @param {string} name
 * @returns {number} time in minutes
 */
export function timeToMixJuice(name) {
  log(name);
  switch (name) {
  case 'Pure Strawberry Joy':
    return 0.5;
  case 'Energizer':
  case 'Green Garden':
    return 1.5;
  case 'Tropical Island':
    return 3;
  case 'All or Nothing':
    return 5;
  default:
    return 2.5;
}
}

/**
 * Calculates the number of limes that need to be cut
 * to reach a certain supply.
 *
 * @param {number} wedgesNeeded
 * @param {string[]} limes
 * @returns {number} number of limes cut
 */
export function limesToCut(wedgesNeeded, limes) {
   let wedgesCut = 0;
  let limesCut = 0;

  for (let lime of limes) {
    if (wedgesCut >= wedgesNeeded) break;

    if (lime === 'small') wedgesCut += 6;
    else if (lime === 'medium') wedgesCut += 8;
    else if (lime === 'large') wedgesCut += 10;

    limesCut++;
  }

  return limesCut;
}

/**
 * Determines which juices still need to be prepared after the end of the shift.
 *
 * @param {number} timeLeft
 * @param {string[]} orders
 * @returns {string[]} remaining orders after the time is up
 */
export function remainingOrders(timeLeft, orders) {
  let time = timeLeft;
  let remainingOrders = [...orders]; 
  
  while (time > 0 && remainingOrders.length > 0) {
    let juice = remainingOrders[0];
    let juiceTime = timeToMixJuice(juice);
    
    if (juiceTime <= time) {
      time -= juiceTime;
      remainingOrders.shift(); 
    } else {
      remainingOrders.shift();
      break; 
    }
  }

  return remainingOrders;
}
