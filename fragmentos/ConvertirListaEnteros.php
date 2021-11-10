<textarea name="codigo" id="codigo" cols="30" rows="10" readonly>    
    // Crear lista
    List<String> listValores = Arrays.asList("1","3","10","56", "56",  "13", "3");		
    
    // Convertir una lista de String  a una lista de Enteros
    List<Integer> listaEnteros = listValores
                                            .stream()
                                            .map(x -> Integer.parseInt(x)) 
                                            .collect(Collectors.toList());	
    // Imprimir Lista
    listaEnteros.forEach( x -> {
    System.out.println("Tipo Dato: "+ x.getClass().getName() + "  Valor: "+x );
    });
</textarea>