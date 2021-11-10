<textarea name="codigo" id="codigo" cols="30" rows="10" readonly>    
    List<String> listValores = Arrays.asList("1","3","10","56", "56",  "13", "3");
    
    // Lista Resultado : Filtrar todo texto diferente  a "3"
    List<String> listResultado = listValores
                                            .stream()
                                            .filter(x -> !x.contains("3"))
                                            .collect(Collectors.toList());
    //  Mostrar 
    listResultado.stream().forEach( x -> System.out.println(x));
</textarea>