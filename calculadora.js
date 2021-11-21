function calcula(operacion) {
    var operando1=document.calc.operando1.value
    var operando2=document.calc.operando2.value
    var result=eval(operando1*150000+operacion+operando2*85000)
    document.calc.resultado.value=result
}