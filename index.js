// let price = 5;
// let quantity = 2;
// let total = 0;
// let dep = new Set();

// let effect = () => {
//     total = price * quantity;
// };

// function track() {
//     dep.add(effect);
// }
// function trigger() {
//     dep.forEach((effect) => effect());
// }

// track();
// trigger();
// console.log(total);

// quantity = 2;
// track();
// trigger();
// console.log(total);

const depsMap = new Map();

// function track(key) {
//     let dep = depsMap.get(key);
//     if (!dep) {
//         depsMap.set(key, (dep = new Set()));
//     }
//     dep.add(effect); ///add this effect since it's a set, it won't add the effect again if it is already exists
// }

// function trigger(key) {
//     let dep = depsMap.get(key);
//     if (dep) dep.forEach((effect) => effect());
// }

let product = { price: 5, quantity: 2 };
let totla = 0;
let effect = () => {
    total = product.price * product.quantity;
};

// track("quantity");
// effect();
// console.log(total);

// in this example
//new WeakMap() will contain Product object and values will be
// new Map //which will contain product keys like quantity , price
// and value will be set where set will contain effect

let targetMap = new WeakMap();

function track(target, key) {
    let depsMap = targetMap.get(target);
    if (!depsMap) {
        targetMap.set(target, (depsMap = new Map()));
    }
    let dep = depsMap.get(key);
    if (!dep) depsMap.set(key, (dep = new Set()));
    dep.add(effect);
}

function trigger(target, key) {
    const depsMap = targetMap.get(target);
    if (!depsMap) return;
    dep = depsMap.get(key);
    if (dep) dep.forEach((effect) => effect());
}

// let product = { price: 5, quantity: 2 };
// function reactive(target) {
//     const handler = {
//         get(target, key, receiver) {
//             return Reflect.get(target, key, receiver);
//         },
//         set(target, key, value, receiver) {
//             console.log(
//                 "Set was called with key = " + key + " and value = " + value
//             );
//             return Reflect.set(target, key, value, receiver);
//         },
//     };
//     return new Proxy(target, handler);
// }
// let proxiedProduct = reactive(product);
// proxiedProduct.quantity = "jakir";
// console.log(proxiedProduct.quantity);
